<?php
    // interface
    interface ArrMethods {
        public function sum();
    }
    // class
    class Aggregator implements ArrMethods {
        private $arr;
        public $total;
        public function __construct($arr) {
            $this->arr = $arr;
        }
        public function sum() {
            $this->total = array_sum($this->arr);
        }
    }

    // instance
    $arr = array(1,2,3);
    $aggregator = new Aggregator($arr);
    $aggregator->sum();
    print($aggregator->total);
;