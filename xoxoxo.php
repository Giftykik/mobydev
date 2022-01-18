<?php

/*Задача решена для бесконечного поля с вариативным количеством в последовательности повторяющихся символов. Например как мы играли в детстве: построить последовательность из 5-ти символов. Задача в поле "3 на 3" является частным слуачаем.*/
$xo = [
    ['Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z'],
    ['Z', 'B', 'B', 'B', 'B', 'B', 'Z', 'Z'],
    ['Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'O'],
    ['Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'O', 'Z'],
    ['Z', 'Z', 'O', 'O', 'Z', 'O', 'Z', 'Z'],
    ['Z', 'Z', 'Z', 'X', 'O', 'Z', 'Z', 'Z'],
    ['A', 'Z', 'Z', 'O', 'X', 'O', 'Z', 'Z'],
    ['A', 'Z', 'Z', 'Z', 'Z', 'X', 'Z', 'Z'],
    ['A', 'Z', 'Z', 'Z', 'Z', 'Z', 'X', 'Z'],
    ['A', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'X'],
    ['A', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z', 'Z'],

];

/*
$xo = [
    ['X', 'O', 'Z', 'Z', 'Z'],
    ['Z', 'X', 'O', 'Z', 'Z'],
    ['Z', 'Z', 'X', 'O', 'Z'],
    ['Z', 'Z', 'Z', 'X', 'O'],
    ['Z', 'Z', 'Z', 'Z', 'X'],

];
*/

/*
$xo = [
    ['X', 'O', 'Z'],
    ['Z', 'X', 'Z'],
    ['O', 'Z', 'X'],

];
*/

// создадим виртуальный бордюр, который послужит инструментом для рекурсивной функции по нахождению идентичного соседа. Так не будем засорять код проверками на существование каждого элемента в массиве.

$xo = array_pad($xo, count($xo)+1, array_pad([], count($xo[0]), "*"));
$xo = array_pad($xo, -1*(count($xo)+1), array_pad([], count($xo[0]), "*"));

for ($i = 0, $Vsize = count($xo);
$i < $Vsize;
$i++) {
    $xo[$i] = array_pad($xo[$i], count($xo[$i])+1, "*");
    $xo[$i] = array_pad($xo[$i], -1*(count($xo[$i])+1), "*");
}

//внутренности на анализ
for ($i = 1, $Vsize = count($xo)-1;
$i < $Vsize;
$i++) {

    for ($j = 1, $Hsize = count($xo[$i])-1;
    $j < $Hsize;
    $j++) {
        $k = sosed_diag($xo, $i, $j);
        if ($k == 5) {
            echo "{$xo[$i][$j]} win! ";
            break;
        }

        $k = sosed_vert($xo, $i, $j);
        if ($k == 5) {
            echo "{$xo[$i][$j]} win! ";
            break;
        }

        $k = sosed_hrzn($xo, $i, $j);
        if ($k == 5) {
            echo "{$xo[$i][$j]} win! ";
            break;
        }

        $k = sosed_redi($xo, $i, $j);
        if ($k == 5) {
            echo "{$xo[$i][$j]} win! ";
            break;
        }

    }
}

function sosed_diag($xo, $i, $j, $k = 0) {
    $k++;
    if ($xo[$i][$j] !== 'Z') {
        if ($xo[$i][$j] == $xo[$i+1][$j+1]) {
            return sosed_diag($xo, $i+1, $j+1, $k);
        } else {
            return $k;
        }
    }
}

function sosed_hrzn($xo, $i, $j, $k = 0) {
    $k++;
    if ($xo[$i][$j] !== 'Z') {
        if ($xo[$i][$j] == $xo[$i][$j+1]) {
            return sosed_hrzn($xo, $i, $j+1, $k);
        } else {
            return $k;
        }
    }
}

function sosed_vert($xo, $i, $j, $k = 0) {
    $k++;
    if ($xo[$i][$j] !== 'Z') {
        if ($xo[$i][$j] == $xo[$i+1][$j]) {
            return sosed_vert($xo, $i+1, $j, $k);
        } else {
            return $k;
        }
    }
}

function sosed_redi($xo, $i, $j, $k = 0) {
    $k++;
    if ($xo[$i][$j] !== 'Z') {
        if ($xo[$i][$j] == $xo[$i+1][$j-1]) {
            return sosed_redi($xo, $i+1, $j-1, $k);
        } else {
            return $k;
        }
    }
}

?>