<?php

function isPriemgetal($n)
{
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return "niet prime";
        } else {
            return 'prime';
        }
    };
}

echo isPriemgetal(11);
