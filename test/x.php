<?php

require_once __DIR__.'/../test.php';

$arr1 = array();
$arr2 = array();
for ($i = 0; $i < 10000; $i++) {

    $arr1[$i] = true;
    $arr2[] = $i;
}

$times = (int)$argv[1];
line('foreach: '.test($times, function() use($arr1){
    foreach($arr1 as $k => $v){
    
    }
}));

line('for: '.test($times, function() use($arr2){
    for($len = count($arr2), $i = 0; $i<$len; $i++){
    
    }
}));

line('array_key_exists: '.test($times, function() use($arr1){
    array_key_exists(9999, $arr1);
}));

line('in_array: '.test($times, function() use($arr2){
    in_array(9999, $arr2);
}));

line('trim(" 123 "): '.test($times, function(){
    trim(' 123 ');
}));
line('trim(" 123 ", " "): '.test($times, function(){
    trim(' 123 ', ' ');
}));
