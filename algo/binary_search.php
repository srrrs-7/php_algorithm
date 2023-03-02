<?php
function binary_search($arr, $x, $left, $right) {
    if ($right >= $left) {
        $mid = floor(($left + $right) / 2);

        // If the element is present at the middle
        if ($arr[$mid] == $x)
            return $mid;

        // If element is smaller than mid, then it can only
        // be present in left subarray
        if ($arr[$mid] > $x)
            return binary_search($arr, $x, $left, $mid - 1);

        // Else the element can only be present in right subarray
        return binary_search($arr, $x, $mid + 1, $right);
    }

    // We reach here when element is not present in array
    return -1;
}

// Example usage
$arr = array(1, 3, 5, 7, 9);
$x = 5;
$result = binary_search($arr, $x, 0, count($arr) - 1);
echo "Element found at index: " . $result;
;