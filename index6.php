<?php
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$url = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '';
echo '网站名: ' . $name;
echo "\n";
echo 'URL 地址: ' .$url;


echo ".<br>";

echo "今天是 " . date("Y-m-d") . "<br>";

$time=date("w",time( ));
$array = ["星期天周日，双色球开奖","星期一周一，大乐透开奖","星期二

周二，双色球开奖","星期三周三大乐透开奖","星期四周四，双色球开奖","星期五周

五，七乐彩开奖","星期六周六，大乐透开奖"];

$time=date("w",time( ));


echo "今天是 " . date("Y/m/d");

echo $array[$time];




?>
