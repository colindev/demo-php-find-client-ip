<?php

require_once __DIR__.'/../get-ip.php';
require_once __DIR__.'/../net.php';
require_once __DIR__.'/../test.php';

$times = (int)$argv[1];

line('net:'.test($times, function(){
    Net::match('127.0.0.0/24', '127.0.0.1');
}));
line('get-ip:'.test($times, function(){
    proxy_list::net_match('127.0.0.0/24', '127.0.0.1');
}));
