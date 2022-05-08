<?php
function points(array $games): int
{
    $score = 0;

    foreach ($games as $game) {
        $gameScore = explode(':', $game);

        if ($gameScore[0] > $gameScore[1]) {
            $score += 3;
        }

        if ($gameScore[0] === $gameScore[1]) {
            $score += 1;
        }
    }

    return $score;
}
