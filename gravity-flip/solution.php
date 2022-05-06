<?php
function flip(string $dir, array $arr): array
{
    switch ($dir) {
        case 'L':
            rsort($arr);
            break;
        case 'R':
            sort($arr);
            break;
        default:
            return [];
    }

    return $arr;
}
