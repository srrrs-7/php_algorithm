<?php

    class Validation {
        private $input;
        private $confirm_input;

        public function __construct(string $input, string $confirm_input) {
            $this->input = $input;
            $this->confirm_input = $confirm_input;
        }

        // escape processing
        public function sanitize() {
            $sanitize_str = filter_var($this->input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            print("$sanitize_str \n");

            if (preg_match("/&/", $sanitize_str)) {
                echo "error: & ";
                return false;
            } else if (preg_match("/%/", $sanitize_str)) {
                echo "error: % ";
                return false;
            } else if (preg_match("/</", $sanitize_str)) {
                echo "error: < ";
                return false;
            } else if (preg_match("/>/", $sanitize_str)) {
                echo "error: > ";
                return false;
            } else if (preg_match("/'/", $sanitize_str)) {
                echo "error: ' ";
                return false;
            } else if (preg_match("/\"/", $sanitize_str)) {
                echo "error: \" ";
                return false;
            } else if (preg_match("/\\\"/", $sanitize_str)) {
                echo "error: \\ ";
                return false;
            } else if (preg_match("/\*/", $sanitize_str)) {
                echo "error: * ";
                return false;
            } else if (preg_match("/\t/", $sanitize_str)) {
                echo "error: tab ";
                return false;
            } else if ($sanitize_str == " ") {
                echo "error: \" \" ";
                return false;
            } else if (empty($sanitize_str)) {
                echo "error: empty ";
                return false;
            }

            return true;
        }

        // check string length >= 8
        public function check_len() {
            $length = strlen($this->input);
            if ($length < 8) {
                return false;
            }
            return true;
        }

        // check integer count >= 1
        public function check_int() {
            $cnt = preg_match_all("/\d/", $this->input, $matches);
            if ($cnt <= 1) {
                return false;
            }
            return true;
        }

        // check string count >= 1
        public function check_str() {
            $cnt = preg_match_all("/\w/", $this->input, $matches);
            if ($cnt <= 1) {
                return false;
            }
            return true;
        }

        // check include upper case string
        public function check_include_upper_case() {
            // include upper case
            $is_include = preg_match("/[A-Z]/", $this->input);
            if (!$is_include) {
                return false;
            }
            return true;
        }

        // check confirm
        public function check_confirm() {
            if ($this->input != $this->confirm_input) {
                return false;
            }
            return true;
        }
    }

    $validation= new Validation(" ", " ");
    $is_sanitize = $validation->sanitize();
    if ($is_sanitize) {
        echo "OK";
    }else {
        echo "Error";
    }