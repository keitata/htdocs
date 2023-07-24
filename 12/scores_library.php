<?php

function calculate_sum($scores)
{
    $sum = 0;
    foreach ($scores as $score) {
        $sum += $score;
    }
    return $sum;
}

function calculate_average($scores)
{
    $sum = calculate_sum($scores);
    return round($sum / count($scores), 2);
}

?>
