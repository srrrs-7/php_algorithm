<?php

    class Progress {
        private $total = 10;

        public function progress () {
            for($i = 0; $i < 0; $i++) {
                $progress = $i / $this->total;
                $bar = '[' + ('=') * intval($progress*20) + (' ') * intval(20*$progress) + ']';
                print("$bar".intval($progress*100) ."% complete" .", end=\r" );
                sleep(0.4);
            }
        }
    }

    $total = 10;
    $progress = new Progress();
    $progress->progress();
;