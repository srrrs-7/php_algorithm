<?php

    require("inheritance/parent_device.php");

    class Phone extends Device {
        public function __construct($name) {
            parent::__construct($name);
            echo "call child: $this->name" .PHP_EOL;
        }

        public function call_parent() {
            parent::parent_show();
        }
    }

    $phone = new Phone("iphone");
    $phone->call_parent() .PHP_EOL;
;