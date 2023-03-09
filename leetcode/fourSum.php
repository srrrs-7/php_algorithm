<?php

    class FourSum {
        /**
         * @param int[] $nums
         * @param int $target
         * @return int[][]
         */
        public function fourSum(array $nums, int $target) {
            sort($nums);
            print_r(implode(", ", $nums));
            return [[1, 3],[2]];
        }
    }

    $instance = new FourSum();
    $res = $instance->fourSum([1, 0, -1, 0, -2, 2], 0);
    print_r($res);