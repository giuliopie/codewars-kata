<?php
function toCamelCase($str)
{
    $str = str_replace('-', '|', $str);
    $str = str_replace('_', '|', $str);
    $words = explode('|', $str);
    $endValue = '';

    for ($i = 0; $i < count($words); $i++) {
        if ($i == 0) {
            $firstChar = substr($words[$i], 0, 1);
            $endValue = ctype_upper($firstChar) ? ucfirst($words[$i]) : strtolower($words[$i]);
        } else {
            $endValue .= ucfirst($words[$i]);
        }
    }

    return $endValue;
}
