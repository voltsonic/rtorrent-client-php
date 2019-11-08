<?php

include "../../vendor/autoload.php";

$BaseClassCommands = "\\Voltsonic\\rTorrent\\XMLRPC\\Commands\\";
$TemplateCommand = "_header_CommandsXmlRpc";
$TemplatesSrc = dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'rtorrent-command-list.json';
$Templates = json_decode(file_get_contents($TemplatesSrc), true);

$classesTotal = 0;
$classesMissing = 0;
$commandsTotal = 0;
$commandsMissing = 0;
$variablesTotal = 0;
$variablesMissing = 0;

$buildCommandFunction = function($command){
    $cmdE = explode('.', $command);
    array_shift($cmdE);
    $cmd = implode('_', array_map(function($v){
        $a = explode('_', $v);
        $b = implode(' ', $a);
        $c = ucwords($b);
        $d = explode(' ', $c);
        return implode('', $d);
    }, $cmdE));
    return lcfirst(preg_replace('/[^a-z0-9_]+/i', '', $cmd));
};

foreach($Templates as $groupKey => $groupData){
    $classesTotal++;
    $className = $BaseClassCommands.str_replace('_header_', ucwords($groupKey), $TemplateCommand);
    $hasClass = class_exists($className);
    if(!$hasClass) $classesMissing++;
    $missingFuncs = false;
    ob_start();

    $commandsTotal += empty($groupData['attributes']['command'])?0:count($groupData['attributes']['command']);
    $variablesTotal += empty($groupData['attributes']['variable'])?0:count($groupData['attributes']['variable']);

    if($hasClass){
        if(!empty($groupData['attributes']['command'])){
            foreach($groupData['attributes']['command'] as $command){
                $cmd = $buildCommandFunction($command['command']);
                $methodAvailable = method_exists($className, $cmd);
                if(!$methodAvailable){
                    $missingFuncs = true;
                    $commandsMissing++;
                } 
                print '    | ['.($methodAvailable?'x':' ').'] ->'.$cmd.PHP_EOL;
            }
        }
        if(!empty($groupData['attributes']['variable'])){
            foreach($groupData['attributes']['variable'] as $variable){
                $cmd = 'var'.ucwords($buildCommandFunction($variable['command']));
                $methodAvailable = method_exists($className, $cmd);
                if(!$methodAvailable){
                    $variablesMissing++;
                }
                print '    | ['.($methodAvailable?'x':' ').'] ->'.$cmd.PHP_EOL;
            }
        }
    }else{
        $commandsMissing += empty($groupData['attributes']['command'])?0:count($groupData['attributes']['command']);
        $variablesMissing += empty($groupData['attributes']['variable'])?0:count($groupData['attributes']['variable']);

    }

    $c = ob_get_contents();
    ob_end_clean();
    print '['.($missingFuncs?'-':($hasClass?'x':' ')).'] '.$className.PHP_EOL;
    print $c;
}

print PHP_EOL;
print 'Missing Classes: '.number_format($classesMissing).' / '.number_format($classesTotal).PHP_EOL;
print 'Missing Commands: '.number_format($commandsMissing).' / '.number_format($commandsTotal).PHP_EOL;
print 'Missing Variables: '.number_format($variablesMissing).' / '.number_format($variablesTotal).PHP_EOL;