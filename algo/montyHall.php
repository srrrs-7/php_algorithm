<?php
    function montyHall(): bool {
        // 3つのドアを用意し、そのうち1つに車を配置する
        $doors = array('○', '×', '×');
        shuffle($doors);

        // プレイヤーは1つのドアを選択する
        $player_choice = rand(0, 2);

        // ×のドアを一つ開ける
        $open_door = null;
        for ($i = 0; $i < 3; $i++) {
        if ($i != $player_choice && $doors[$i] == '×') {
            $open_door = $i;
            break;
        }
        }

        // プレイヤーがドアを変更するかどうかを決める
        $switch_choice = rand(0, 1);

        // プレイヤーがドアを変更する場合は、残りのドアを選択する
        if ($switch_choice == 1) {
        for ($i = 0; $i < 3; $i++) {
            if ($i != $player_choice && $i != $open_door) {
                $player_choice = $i;
                break;
            }
        }
        }

        // 最終的に選択したドアが○だった場合、trueを返す
        if ($doors[$player_choice] == '○') {
            return true;
        }
        return false;
    }

    function execute() {
        $count = 0;
        for ($i = 0; $i <= 1000; $i++) {
            $correct = montyHall();
            if ($correct == true) {
                $count++;
            }
        }

        echo $count / 1000 * 100 . "% \n";
    }

    for ($i = 0; $i <= 10; $i++) {
        execute();
    }