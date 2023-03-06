<?php
    class Device {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
            echo "initialize: $this->name" .PHP_EOL;
        }

        protected function parent_show() {
            echo "parent show: " . $this->name;
        }
    }
 ;