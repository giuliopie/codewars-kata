<?php
function pillars($numberOfPillars, $dist, $width)
{
    $distance_cm = $dist * 100;
    if ($numberOfPillars > 2) {
        return $distance_cm * ($numberOfPillars - 1) + $width * ($numberOfPillars - 2);
    } else {
        return $distance_cm * ($numberOfPillars - 1);
    }
}
