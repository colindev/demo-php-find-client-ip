<?php

require_once __DIR__.'/../get-ip.php';
require_once __DIR__.'/../ips.php';
require_once __DIR__.'/../network.php';
require_once __DIR__.'/../net.php';
require_once __DIR__.'/../test.php';

$fakeServer = [
    'REMOTE_ADDR' => '10.8.0.1',
    'HTTP_X_FORWARDED_FOR' => "1.2.3.4, 182.183.0.1, 10.1.0.234, 10.5.4.3",
];

$_SERVER = $fakeServer;

function testNet($ips):string
{
    $net = new Net($ips);
    return $net->getUserIP($_SERVER);
}

function testNetwork($ips):string
{
    $serialize = __DIR__.'/1_network.txt';
    if (file_exists($serialize)) {
        $net = unserialize(file_get_contents($serialize));
    } else {
        $net = new Network($ips);
        file_put_contents($serialize, serialize($net));
    }
    return $net->getUserIP($_SERVER);
}

proxy_list::$proxy_ip = [];
proxy_list::$proxy_net = $ips;
function testGetIP():string
{
    return getUserIP();
}

$times = (int)$argv[1];

display('testGetIP', testGetIP());
line(test($times, function(){testGetIP();}));
line('');

display('testNet', testNet($ips));
line(test($times, function()use($ips){testNet($ips);}));
line('');

display('testNetwork', testNetwork($ips));
line(test($times, function()use($ips){testNetwork($ips);}));
line('');
