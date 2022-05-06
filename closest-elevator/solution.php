<?php
function elevator($left, $right, $call)
{
    if ($call === $right) return 'right';
    if ($call === $left) return 'left';

    $distance_l = abs($left - $call);
    $distance_r = abs($right - $call);

    if ($distance_r === $distance_l) return 'right';

    return $distance_l < $distance_r ? 'left' : 'right';
}
