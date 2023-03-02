<?php
    class Account {
        public $id;
        public $name;
        public $skill;

        function register($id, $name, $skill) {
            $this->id = $id;
            $this->name = $name;
            $this->skill = $skill;
        }

        function getName() {
            return $this->name;
        }
    }

    $srrrs = new Account;
    $srrrs->register(1, "srrrs", "touch typing");
    $name = $srrrs->getName();
    print("$name\n");

    echo "hello php";
    print("hello HTML \n");

    $age = 20;
    if ($age >= 18) {
        print("OK");
        echo "Hello";
    }

    $validate = array(
        'request_type' => array(
            'inList' => array(
                'rule' => array('inList', array('hoge1', 'hoge2')),
                'message' => 'hoge または hoge1を指定してください。',
                'required' => true,
            )
        ),
    );
    var_dump($validate)
;