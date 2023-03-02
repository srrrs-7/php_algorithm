<?php
    function quicksort($array) {
        if (count($array) <= 1) {
            return $array;
        }

        $pivot = $array[0];
        $left = $right = array();

        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $pivot) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }

        return array_merge(quicksort($left), array($pivot), quicksort($right));
    }

    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    // reverse sort
    rsort($array);
    print_r($array);
    // quick sort
    $result = quicksort($array);
    print_r($result);
;