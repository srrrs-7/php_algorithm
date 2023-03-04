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
            return $this->array;
        }

        public function reverse() {
            rsort($this->array);
            return $this->array;
        }

        public function hash_map_sort() {
            asort($this->hash_map);
            return $this->hash_map;
        }
    }

    $arr = array(5,4,3,2,1);
    $hash_map = array(
        1=>"oen",
        2=>"two",
        3=>"three"
    );

    $instance = new SortAlgo($arr, $hash_map);
    $rev_arr = $instance->reverse();

    foreach ($rev_arr as $el) {
        echo "$el" .PHP_EOL;
        echo "carrige return \"\r";
        echo "new line \n";
        echo "form feed \f";
        echo "vertical tab \v";
        echo "tab \t";
    }

;