<?php
require 'Ip2Region.php';

$ip2region = new Ip2Region\Ip2Region();

$ip = '101.105.35.57';

$ip_info = $ip2region->btreeSearch($ip);

echo '<pre>';
print_r($ip_info);

/***************************************************
    Array
    (
        [city_id] => 2163
        [region] => 中国|华南|广东省|深圳市|鹏博士
    )
 ***************************************************/