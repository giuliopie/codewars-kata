<?php
function points(array $games): int
{
    $points = 0;
    foreach ($games as $game) {
        $home = explode(':', $game)[0];
        $away = explode(':', $game)[1];
        if ($home > $away) $points = $points + 3;
        if ($home == $away) $points = $points + 1;
    }

    return $points;
}
