<?php

    class Progress {
        private $total = 10;

        public function progress() {
            for($i = 0; $i <=$this->total; $i++) {
                $progress = $i / $this->total;
                $show = str_repeat('=', intval($progress*20));
                $empty = str_repeat(' ', intval(20 - $progress*20));
                $bar = '[' . $show . $empty . ']';
                print("$bar". intval($progress*100) . "% complete" . "\r" );
                sleep(1);
            }
        }
    }

    $progress = new Progress();
    $progress->progress();
;