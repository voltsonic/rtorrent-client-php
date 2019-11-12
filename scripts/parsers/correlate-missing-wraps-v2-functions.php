<?php

function buildFunction($command){
    $cmdE = explode('.', $command);
    if(count($cmdE) > 1)
        array_shift($cmdE);
    $cmd = implode('_', array_map(function($v){
        $a = explode('_', $v);
        $b = implode(' ', $a);
        $c = ucwords($b);
        $d = explode(' ', $c);
        return implode('', $d);
    }, $cmdE));
    $cmdf = lcfirst(preg_replace('/[^a-z0-9_]+/i', '', $cmd));
    return $cmdf;
}

function buildGroupKey($groupKey){
    $groupKey = ucwords(preg_replace("/[^0-9a-z]+/i", ' ', $groupKey));
    while(strpos($groupKey, ' '))
        $groupKey = str_replace(' ', '', $groupKey);
    return $groupKey;
}