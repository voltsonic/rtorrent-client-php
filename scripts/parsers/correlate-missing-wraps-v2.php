<?php

// This is a very basic tool that just looks at the parsed command list from
// ./rakshasa-rtorrent-command-list-parser.js
// and looks for the classes and functions based on the names.
// it will attempt to create filler functions for you to paste but if parameters are required
// you will need to add those in yourself.
// _Get ending functions are variable read-only's so the TO-DO tag is not added.

include "../../vendor/autoload.php";
include "./correlate-missing-wraps-v2-functions.php";

$rTorrentCommandsSrc = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'rtorrent-command-list.json';
$rTorrentCommands = json_decode(file_get_contents($rTorrentCommandsSrc), true);

$tagPhp = '<?php';

$createFuncTemplate_XMLRPC = function(&$appendTemplate, $cmdFunction, $classNameBase, $commandRaw){
    $isGetFunc = preg_match('/_Get$/', $cmdFunction) === 1;
    $todoAdd = $isGetFunc?'':(PHP_EOL.'        // TODO: verify parameters');
    $appendTemplate .= <<<EOL
    public static function {$cmdFunction}(){{$todoAdd}
        return new {$classNameBase}(self::cmd('{$commandRaw}'));
    }

EOL;
};
$classBuilder_XMLRPC = function($namespace, $className, $commandPrefix, $groupKey) use($tagPhp) {
    $tagPhpNamespace = 'namespace \\'.trim($namespace, '\\').';';
    return <<<EOL
-------------------------
{$tagPhp}

{$tagPhpNamespace}

class {$className} extends __RequestsXmlRpcAbstract {
    protected static \$methodPrefix = '{$commandPrefix}';
}
-------------------------

EOL
        ;
};


$ClassTemplates = [
    [
        'callbacks' => [
            'missingCommand' => $createFuncTemplate_XMLRPC,
            'missingVariable' => $createFuncTemplate_XMLRPC
        ],
        'classBuilder' => $classBuilder_XMLRPC,
        'base' => '\\Voltsonic\\rTorrent\\XMLRPC\\Requests\\',
        'class' => '__header__RequestXmlRpc'
    ],
];

foreach($ClassTemplates as $classTemplateConfig){
    $baseNamespace = $classTemplateConfig['base'];
    $classTemplate = $classTemplateConfig['class'];
    $classBuilder = $classTemplateConfig['classBuilder'];
    $callbacks = $classTemplateConfig['callbacks'] ?? [];
    $callback_missingCommand = $callbacks['missingCommand'] ?? false;
    $callback_missingVariable = $callbacks['missingVariable'] ?? false;

    print $baseNamespace.'...'.PHP_EOL;
    print '===================================='.PHP_EOL;

    $classesTotal = 0;
    $classesMissing = 0;
    $commandsTotal = 0;
    $commandsMissing = 0;
    $variablesTotal = 0;
    $variablesMissing = 0;

    foreach($rTorrentCommands as $groupKey => $groupData){
        $groupKey = buildGroupKey($groupKey);
        $classesTotal++;
        $classNameBase = str_replace('__header__', $groupKey, $classTemplate);
        $className = $baseNamespace.$classNameBase;
        $hasClass = class_exists($className);
        if(!$hasClass) $classesMissing++;
        $missingAny = false;
        $commandsTotal += empty($groupData['attributes']['command'])?0:count($groupData['attributes']['command']);
        $variablesTotal += empty($groupData['attributes']['variable'])?0:count($groupData['attributes']['variable']);
        ob_start();

        $commandPrefix = (!empty($groupData['attributes']['command']))
            ?$groupData['attributes']['command'][0]['command']
            :((!empty($groupData['attributes']['variable']))
                ?$groupData['attributes']['variable'][0]['command']
                :'__MISSING__');
        $s = explode('.', $commandPrefix);
        $commandPrefix = count($s) === 1?'':array_shift($s);

        if(in_array($groupKey, ['misc','execution','scheduling']))
            $commandPrefix = '';

        $dumpMissingInClass = '';

        if($hasClass){
            if(!empty($groupData['attributes']['command'])){
                print '    |/ Commands'.PHP_EOL;
                $missingAnyInner = false;
                foreach($groupData['attributes']['command'] as $command){
                    $cmd = buildFunction($command['command']);
                    $cmdPhp = preg_replace('/^'.$commandPrefix.'\./i', '', $command['command']);
                    $methodAvailable = method_exists($className, $cmd);
                    if(!$methodAvailable){
                        if(!$missingAnyInner)
                            if(is_callable($callback_missingCommand))
                                $dumpMissingInClass .= (empty($dumpMissingInClass)?'':PHP_EOL)."    // Commands".PHP_EOL;
                        $missingAny = true;
                        $missingAnyInner = true;
                        $commandsMissing++;
                    }
                    print '    | ['.($methodAvailable?'x':' ').'] ->'.$cmd.PHP_EOL;
                    if(!$methodAvailable){
                        if(is_callable($callback_missingCommand))
                            $callback_missingCommand($dumpMissingInClass, $cmd, $classNameBase, $cmdPhp);
                    }
                }
            }
            if(!empty($groupData['attributes']['variable'])){
                print '    |/ Variables'.PHP_EOL;
                $missingAnyInner = false;
                foreach($groupData['attributes']['variable'] as $variable){
                    $cmd = buildFunction($variable['command']);
                    $cmd .= '_Get';
                    $cmdPhp = preg_replace('/^'.$commandPrefix.'\./i', '', $variable['command']);
                    $methodAvailable = method_exists($className, $cmd);
                    if(!$methodAvailable){
                        if(!$missingAnyInner)
                            if(is_callable($callback_missingVariable))
                                $dumpMissingInClass .= (empty($dumpMissingInClass)?'':PHP_EOL)."    // Variables".PHP_EOL;
                        $missingAny = true;
                        $missingAnyInner = true;
                        $variablesMissing++;
                    }
                    print '    | ['.($methodAvailable?'x':' ').'] ->'.$cmd.PHP_EOL;
                    if(!$methodAvailable && is_callable($callback_missingVariable))
                        $callback_missingVariable($dumpMissingInClass, $cmd, $classNameBase, $cmdPhp);
                }
            }
        }
        else{
            $commandsMissing += empty($groupData['attributes']['command'])?0:count($groupData['attributes']['command']);
            $variablesMissing += empty($groupData['attributes']['variable'])?0:count($groupData['attributes']['variable']);
        }

        $c = ob_get_contents();
        ob_end_clean();
        print '['.($missingAny?'-':($hasClass?'x':' ')).'] '.$className.PHP_EOL;
        if(!$hasClass){
            print $classBuilder($baseNamespace, $classNameBase, $commandPrefix, $groupKey);
        }
        if(!empty($c) && $missingAny){
            print $c.PHP_EOL;
            print $dumpMissingInClass.PHP_EOL.PHP_EOL;
        }
    }

    print PHP_EOL;
    print 'Missing Classes: '.number_format($classesMissing).' / '.number_format($classesTotal).PHP_EOL;
    print 'Missing Commands: '.number_format($commandsMissing).' / '.number_format($commandsTotal).PHP_EOL;
    print 'Missing Variables: '.number_format($variablesMissing).' / '.number_format($variablesTotal).PHP_EOL;
    print PHP_EOL;
    print '===================================='.PHP_EOL;
    print '====================================';
    print PHP_EOL.PHP_EOL;
}
