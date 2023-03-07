<?php

function debug () {
    $arr = array(array(array(1,2,3,4),array(5,6,7)),8,9,10);

    foreach ($arr as $a) {
        var_dump($a);
    }

    debug_print_backtrace();
}

function backTrace() {
    debug();
}

debug();