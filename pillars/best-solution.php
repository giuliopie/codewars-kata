<?php
function pillars($numberOfPillars, $dist, $width)
{
    return max(0, ($numberOfPillars - 1) * ($dist * 100 + $width) - $width);
}
