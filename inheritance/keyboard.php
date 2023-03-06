<?php
class Keyboard extends Device {
    public function __construct($name) {
        parent::__construct($name);
        echo "call: $this->name" .PHP_EOL;
    }

    public function show() {
        echo "keyboard method: $this->name" .PHP_EOL;
    }
}

// instance
$keyboard = new Keyboard("keyboard");
$keyboard->show();
$device = new Device("device");

;