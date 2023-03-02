<?php
    class Node {
        public $data;
        public $next;

        function __construct($data) {
            $this->data = $data;
            $this->next = null;
        }
    }

    class LinkedList {
        private $head;

        function __construct() {
            $this->head = null;
        }

        public function insert($data) {
            $newNode = new Node($data);

            if ($this->head == null) {
                $this->head = $newNode;
            } else {
                $last = $this->head;
                while ($last->next != null) {
                    $last = $last->next;
                }
                $last->next = $newNode;
            }
        }

        public function delete($data) {
            if ($this->head == null) {
                return;
            }

            if ($this->head->data == $data) {
                $this->head = $this->head->next;
                return;
            }

            $prev = $this->head;
            $curr = $this->head->next;
            while ($curr != null) {
                if ($curr->data == $data) {
                    $prev->next = $curr->next;
                    return;
                }
                $prev = $curr;
                $curr = $curr->next;
            }
        }

        public function display() {
            $curr = $this->head;
            while ($curr != null) {
                echo $curr->data . " ";
                $curr = $curr->next;
            }
        }
    }

    // Example usage
    $list = new LinkedList();
    $list->insert(1);
    $list->insert(2);
    $list->insert(3);
    $list->delete(2);
    $list->display(); // Output: 1 3
;