<?php
    class SortAlgo {
        private $array = array();
        private $hash_map = array();

        public function __construct(array $arr, $hash_map) {
            $this->array = $arr;
            $this->hash_map = $hash_map;
        }

        public function sort() {
            sort($this->array);
        }

        public function reverse() {
            rsort($this->array);
        }

        public function hash_map_sort() {}

    }
;