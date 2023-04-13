<?php
// This is line comment
/*
This is block comment

*/
const HELLO_WORLD = 1; //konstandile ei panda $ märki ette ja reeglina kirjutatakse suurte tähtedega ja alamkriipsuga
$num = 1; //int tüüpi
$bar = 4.1; //float tüüpi
$num = 'hello'; //string tüüp
$num = HELLO_WORLD;
$num = true; //boolean
$num = false;
$num = [1,2,3,4,5]; //array (massiiv)
$num = [
    'red' => 1,
    'blue' => 2,
    'green' => 3
];
$num = ['red' => 1, 2, 3, 4, 5, 'foo' => 'bar'];

$num = 1;
$num = 1 + 1;
$num = 1 - 1;
$num = 1 * 1;
$num = 1 / 1;
$num = 4 % 2;
$num += 1;
$num -= 1;
$num *= 1;
$num /= 1;
$num %= 1;
$num++;
$num--;
$num = 2;
$num = $num**2;
$num = true && false;
$num = true || false;
$num = 10 > 1;
$num = 10 == 10;
$num = '10' == 10; //pehme võrdsus
$num = '10' === 10; //tugev vürdsus
$num = '10' !== 10; // pehme ebavõrdsus
$num = '10' != 10;
$num = 'hello' . 'world';
var_dump($num);