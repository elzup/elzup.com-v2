<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

$filepath = './out.csv';
$f = file_get_contents($filepath);
$datas = array();

$lines = explode("\n", $f);
array_shift($lines);
foreach ($lines as $i => $line) {
    $datas[] = explode(",", $line);
}

$activity = array();
foreach ($datas as $data) {
    if (count($data) != 4) {
        continue;
    }
    list($date, $time, $place, $code) = $data;
    $is_in = !mb_strpos($place, "退室");
    @$activity[$date][] = $is_in;
}

$leasts = array();
foreach ($activity as $date => $v) {
    list($y, $m, $d) = explode('/', $date);
    @$leasts[$y.$m][$d] = end($v);
}

echo '<pre>';
foreach ($leasts as $month => $days) {
    echo $month;
    foreach ($days as $day) {
        echo $day ? "■" : "□";
    }
    echo PHP_EOL;
}
