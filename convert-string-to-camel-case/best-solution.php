<?php
function toCamelCase($str)
{
    return preg_replace_callback("~[_-](\w)~", function ($m) {
        return strtoupper($m[1]);
    }, $str);
}
