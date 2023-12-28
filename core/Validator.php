<?php

namespace Core;
class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function pgn($value, $min = 1, $max = 1500)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }
}