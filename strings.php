<?php
/**
 * Created by PhpStorm.
 * User: twb
 * Date: 16.02.15
 * Time: 11:44
 */
$title = "Работа со строками";
include_once('layouts/header.php');

print('<div class="container">');


////Посчитать кол-во символов в строке
$str = "Харе Кришна";
$str_len = strlen($str);
print($str.'<br>');
print($str_len);
//Посчитать с помощью mb_strlen. Эта функция лучше для кириллицы, в ней можно указать кодировку.
$mbstr_len = mb_strlen($str, 'utf-8');
echo "$mbstr_len";


print('
<p>Посчитать кол-во символов в строке</p><code>$str = "Харе Кришна";
$str_len = strlen($str);
print($str_len);
//Посчитать с помощью mb_strlen. Эта функция лучше для кириллицы, в ней можно указать кодировку.
$mbstr_len = mb_strlen($str, "utf-8");
echo "$mbstr_len";

</code>');


//Удаление символов

print('</div>');
include_once('layouts/footer.php');
?>