<?php

function t1()
{
    $a = ['1', 2, true, false, 'hello'];
    return $a;
}

function t2()
{
    $a = [false, true];
    return $a;
}

function t3()
{
    $a = [];
    for ($i = 1; $i <= 100; $i++) {
        $a[] = $i;
    }
    return $a;
}

function t4()
{
    $a = [];
    $a[10] = 5;
    $a[15] = 11;
    return $a;
}

function t5($ar)
{
    if ($ar[5]) {
        return trim($ar[5]);
    } else {
        return "Элемента по индексом 5 не существует";
    }
}

function t6($ar)
{
    if ($ar[2] and $ar[4]) {
        $ar[2] += +$ar[4] - $ar[4] = $ar[2];
        return $ar;
    } else {
        return "Требуются оба элемента, под индексами 2 и 4";
    }

}

function t7($arr)
{
    list($arr[0], $arr[count($arr) - 1]) = array($arr[count($arr) - 1], $arr[0]);
    return $arr;
}

function t8($arr)
{
    for ($i = 0; $i <= count($arr); $i++) {
        if ($arr[$i] >= 0) {
            continue;
        } else {
            return $arr[$i];
        }
    }
}

function t9($arr)
{
    for ($i = count($arr) - 1; $i >= 0; $i = $i - 1) {
        if ($arr[$i] >= 0) {
            continue;
        } else {
            return $arr[$i];
        }
    }
}

function t10($num, $arr)
{
    for ($i = 0; $i <= count($arr) - 1; $i++) {
        if ($arr[$i] !== $num) {
            continue;
        } else {
            return 1;
        }
    }
    return 0;
}