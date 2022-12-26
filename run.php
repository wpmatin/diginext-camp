<?php

function questionOne($string, $length)
{
    $result = 0;
    for ($i = 0; $i < round(strlen($string) % $length); $i++) {
        $string .= $string;
    }
    $string = strtolower($string);
    for ($i = 0; $i < $length; $i++) {
        if ($string[$i] == 'a') {
            $result++;
        }
    }
    return $result;
}

function questionTwo($string)
{
    $result = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if ($i > 0 && $string[$i] == $string[$i - 1]) {
            $result++;
        }
    }
    return $result;
}

function questionThree($array)
{

}
