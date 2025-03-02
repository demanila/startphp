<?php
/*echo "Hello World!";

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


$z = [24, 43, [247, 14, 67], 18, [97, 144, [56, [12, 48], 813], 678]];

function recur($value, $key)
{
    echo "Индексу $key соответствует значение $value" . '<br>';
}

array_walk_recursive($z, 'recur');
echo '<hr />';

function recurs($z)
{
    foreach ($z as $k => $v)
        if (is_array($v)) {
            recurs($v);
        } else {
            echo "$k  =  $v" . '<br>';
        }
}

recurs($z);


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
echo '<hr />';


// Функция array_map

function plusTen($z)
{
    return ($z + 10);
}

$a = [78, 13, 0.82, 7, 16, 45, 183, 91];
$b = array_map('plusTen', $a);

echo '<pre>';
print_r($b);
echo '</ pre>';
echo '<hr />';


$c = [78, 13, 0.82, 7, 16, 45, 183, 91];
$d = array_map(function ($y) {
    return $y + 10;
}, $c);
echo '<pre>';
print_r($d);
echo '</ pre>';
echo '<hr />';

// Функция array_filter

$e = [77, 13, 2, 7, 16, 45, 184, 91];
function even($x)
{
    if ($x % 2 == 0)
        return $x;
}

$f = array_filter($e, 'even');
echo '<pre>';
print_r($f);
echo '</ pre>';
echo '<hr />';
$k = [7, 13, 2, 7, 16, 45, 184, 91];
$l = array_filter($k, function ($q) {
    if ($q % 2 != 0)
        return $q;
});
echo '<pre>';
print_r($l);
echo '</ pre>';
echo '<hr />';

// Функция array_chunk

$j = [7, 13, 2, 7, 16, 45, 184, 91];
print_r(array_chunk($j, 2));
print_r(array_chunk($j, 3));
print_r(array_chunk($j, 3, true));
echo '<hr />';

// Функция in_array

$s = [7, 13, 2, 7, 16, 45, 184, 91];
if (in_array(23, $s)) {
    echo "Есть тут 23!";
} else {
    echo "Нет тут такого числа";
}
echo '<hr />';

$student = [
    [
        'name' => 'Yasha 1',
        'surname' => 'Ivanov',
        'email' => 'yasha@yasha.ru',
        'phone' => '+7(999)999-99-99',
        'age' => 23,
    ],
    [
        'name' => 'Yasha 2',
        'surname' => 'Petrov',
        'email' => 'yasha@yasha.ru',
        'age' => 21,
    ],
    [
        'name' => 'Yasha 3',
        'surname' => 'Sidorov',
        'email' => 'yasha@yasha.ru',
        'age' => 26,
    ]
];

function stud($student)
{
    foreach ($student as $k => $v)
        if (is_array($v)) {
            stud($v);
        } else {
            echo "$k : $v" . '<br>';
        }
}

stud($student);
echo '<hr />';

array_multisort(array_column($student, 'age'), SORT_ASC, $student);
foreach ($student as $i) {
    print_r($student);
}
echo '<hr />';

function sor($d, $g)
{
    return ($d['age'] < $g['age']);
}

uasort($student, 'sor');
print_r($student);
echo '<hr />';

$n = ['Красный', 'Оранжевый', 'Желтый', 'Зеленый'];
echo (implode(" , ", $n)) . '<br>';
var_dump(implode(" ; ", $n));
echo '<hr />';

$rainbow = 'красный оранжевый желтый зеленый голубой синий фиолетовый';
$colors = explode(" ", $rainbow);
print_r($colors);
echo "Цвет №3 $colors[2]";
echo '<hr />';

$rc = json_encode($colors, JSON_UNESCAPED_UNICODE);
echo $rc . '<br>';

print_r(json_decode($rc));
echo '<hr />';

$u = [77, 13, 2, 7, 16, 45, 184, 91];

$n = count($u);
for ($i = 1; $i <= $n - 1; $i++) {
    for ($j = 0; $j <= $n - 1 - $i; $j++) {
        if ($u[$j] > $u[$j + 1]) {
            $w = $u[$j];
            $u[$j] = $u[$j + 1];
            $u[$j + 1] = $w;
        }
    }
}

echo '<pre>';
print_r($u);
//echo '</pre>';

*/
?>
<form action="/auth/registration.php" method="POST" enctype="multipart/form-data">
    <p><input required type="email" name="login" placeholder="Логин"></p>
    <p><input required type="password" name="password" placeholder="Пароль"></p>
    <p><input type="file" name="avatar"></p>
    <p><input type="submit" value="Регистрация"></p>
</form>

<form action="/auth/authorization.php" method="POST" enctype="multipart/form-data">
    <p><input required type="email" name="login" placeholder="Логин"></p>
    <p><input required type="password" name="password" placeholder="Пароль"></p>
    <p><input type="submit" value="Войти"></p>
</form>