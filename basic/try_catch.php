<?php
    try {
        $even = 2;
        $odd = 3;
        $result = $even * $odd;
        if (!($result % 2 == 0)) {
            throw new Exception("result is not even : check variables");
        }
        echo $result;
    } catch (Throwable $t) {
        echo $t->getMessage();
    }
;