<?php
echo "Hello World!";

echo '<hr />';
function sayHello()
{
    echo '"Привет!"';
}
sayHello();
echo '<hr />';
function sum($a, $b)
{
    return $a + $b;
}
$sum = sum(7, 8);
echo $sum;
echo '<hr />';
function greet($name = "Гость")
{
    echo "Здравствуйте, $name!";
}
greet("Прохор");
echo '<hr />';

$twice_1 = function ($t) {
    return $t * 2;
};
echo $twice_1(7);
echo '<hr />';

$twice_2 = fn($t_2) => $t_2 * 2;
echo $twice_2(7);
echo '<hr />';


$arr_n = [
    'Номер' => [1, 2, 3, 4, 5],
    'Цвет' => ['Красный', 'Оранжевый', 'Желтый', 'Зеленый', 'Голубой']
];
function XZ_function($value, $key) {
    echo "$key = $value";
}
array_walk_recursive($arr_n, 'XZ_function');

echo '<pre>';
print_r($arr_n);
echo '</pre>';
echo '<hr />';

function plusOne($p) {
    return $p + 1;
}
$arr_7 = [1, 3, 5, 7, 9];
$newArr_7 = array_map('plusOne', $arr_7);
print_r($newArr_7);
echo '<hr />';

$str_8 = 'priVate if called From inside the Class, but if you the class';
echo strlen($str_8) . '<br>';
echo strtoupper($str_8) . '<br>';
echo strtolower($str_8);
echo '<hr />';

$arr_91 = [1, 2, 4, 8, 16];
$arr_92 = [1, 3, 6, 12, 24];
array_push($arr_91, 32);
print_r($arr_91);
echo '<br>';
array_pop($arr_91);
print_r($arr_91);
echo '<br>';
$arr_93 = array_merge($arr_91, $arr_92);
print_r($arr_93);
echo '<hr />';

$num_10 = 84;
echo is_string($str_8) . '<br>';
var_dump(is_string($arr_92));
echo '<br>';
echo is_numeric($num_10) . '<br>';
echo is_numeric($arr_91) . '<br>';
var_dump(is_numeric($arr_91));
echo '<br>';
echo is_array($num_10) . '<br>';
echo is_array($str_8) . '<br>';
var_dump(is_array($arr_92));
echo '<hr />';

$z_11 = 48;
$v_11 = 3.16;
$s_11 = -0.76;
echo abs($z_11) . '<br>';
echo abs($v_11) . '<br>';
echo abs($s_11) . '<br>';
echo sqrt($s_11) . '<br>';
echo sqrt($z_11) . '<br>';
echo sqrt($v_11) . '<br>';
echo round($z_11, -1) . '<br>';
echo round($v_11, 1) . '<br>';
echo round($s_11, 2) . '<br>';
echo ceil($z_11) . '<br>';
echo ceil($v_11) . '<br>';
echo ceil($s_11) . '<br>';
echo floor($z_11) . '<br>';
echo floor($v_11) . '<br>';
echo floor($s_11) . '<br>';
echo rand() . '<br>';
echo rand(0, 44) . '<br>';
echo mt_rand() . '<br>';
echo mt_rand(0, 44) . '<br>';
echo '<hr />';

echo date('l') . '<br>';
echo date('y/m/d/') . '<br>';
echo date('d-m-y h:i:s') . '<br>';

