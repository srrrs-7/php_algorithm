<?php

    class FourSum {
        /**
         * @param int[] $nums
         * @param int $target
         * @return int[][]
         */
        public function fourSum(array $nums, int $target) {
            sort($nums);
            var_dump($nums);
            return [[1, 3],[2]];
        }
    }

    $instance = new FourSum();
    $instance->fourSum([1, 0, -1, 0, -2, 2], 0);