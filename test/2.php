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

$a = new Net($ips);
$testNet = function() use($a) :string
{
    return $a->getUserIP($_SERVER);
};

$b = new Network($ips);
$testNetwork = function() use($b) :string
{
    return $b->getUserIP($_SERVER);
};

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

display('testNet', $testNet());
line(test($times, $testNet));
line('');

display('testNetwork', $testNetwork());
line(test($times, $testNetwork));
line('');
