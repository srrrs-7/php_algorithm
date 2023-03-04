<?php

    class Device {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
            echo "initialize: $name" .PHP_EOL;
        }
    }

    class Keyboard extends Device {
        public function __construct($name) {
            parent::__construct($name);
            echo "call: $name ".PHP_EOL;
        }
    }

    // instance
    $keyboard = new Keyboard("keyboard");
 ;