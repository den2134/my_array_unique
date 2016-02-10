<?php
require_once 'lib/func.php';

$max = 100000;
$arr = [];

for($i=0; $i<$max; ++$i)
    $arr[$i] = rand(-1000, 1000);

for($i=0; $i<20; ++$i) {
    $arr[rand(0, $max)] = 'some text';
    $arr[rand(0, $max)] = 'jkljlk';
    $arr[rand(0, $max)] = '34';
}

/*echo 'Array';
echo '<pre>';
    print_r($arr);
echo '</pre>';*/

$time = -microtime(true);
$uniq_arr1 = array_unique($arr);
$time += microtime(true);
echo "array_unique() - count = ".count($uniq_arr1)."; time = $time <br>";

/*echo '<pre>';
 print_r($uniq_arr1);
echo '</pre>';*/

$time = -microtime(true);
$uniq_arr2 = my_array_unique($arr);
$time += microtime(true);
echo "my_array_unique() - count = ".count($uniq_arr2)."; time = $time <br>";

/*echo '<pre>';
print_r($uniq_arr2);
echo '</pre>';*/





