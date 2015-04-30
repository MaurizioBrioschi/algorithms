<?php

/**
 * Quicksort is an efficent sorting algorithm base on the paradigm divide et impera
 * Is the best algorithm base on comparison
 * Best case: Θ (n log n)
 * Bad case: Θ (n^2)
 * 
 * @author Maurizio Brioschi<maurizio.brioschi@ridesoft.org>
 */
function quicksort($array)
{
    if (count($array) < 2) {
        return $array;
    }
    $left = $right = array();
    reset($array);
    $pivot_key = key($array);
    $pivot = array_shift($array);
    foreach ($array as $k => $v) {
        if ($v < $pivot)
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }
    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
}
