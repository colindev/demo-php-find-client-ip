<?php

function line($str)
{
    echo $str, PHP_EOL;
}
function display($name, $result)
{
    line("=== ${name}");
    line($result);
}

function test($times, Closure $c):string
{
    $s = microtime(true);
    for ($i = $times; $i > 0; $i--) {
        $c();
    }

    return sprintf("%f sec", microtime(true) - $s);
}   
    





