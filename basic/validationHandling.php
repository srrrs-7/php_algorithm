<?php

use function PHPUnit\Framework\throwException;

    class ValidationHandling {
        private $input;
        private $confirm_input;

        public function __construct(string $input, string $confirm_input) {
            $this->input = $input;
            $this->confirm_input = $confirm_input;
        }

        // escape processing
        protected function sanitize() {
            $is_sanitize = filter_var($this->input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if (!$is_sanitize) {
                return throwException(new Exception("error: sanitize"));
            }
        }

        // check string length >= 8
        protected function check_len() {
            $length = strlen($this->input);
            if ($length <= 8) {
                return throwException(new Exception("error: string length less than 8"));
            }
        }

        // check integer count >= 1
        protected function check_int() {
            $cnt = preg_match_all("/\d/", $this->input, $matches);
            if ($cnt <= 1) {
                return throwException(new Exception("error: include integer"));
            }
        }

        // check include string
        protected function check_str() {
            $cnt = preg_match_all("/\s/", $this->input, $matches);
            if ($cnt <= 1) {
                return throwException(new Exception("error: include string"));
            }
        }

        // check include upper case string
        protected function check_include_upper_case() {
            // include upper case
            $is_include = preg_match("/[A-Z]/", $this->input);
            // all upper case
            $is_all_upper = ctype_upper($this->input);
            if (!$is_include || !$is_all_upper) {
                return throwException(new Exception("error: include upper case"));
            }
        }

        // check input == confirm input
        protected function check_confirm() {
            if ($this->input != $this->confirm_input) {
                return throwException(new Exception("error: check confirm"));
            }
        }

        // check result
        public function valid() {
            $this->sanitize();
            $this->check_len();
            $this->check_int();
            $this->check_str();
            $this->check_include_upper_case();
            $this->check_confirm();
            return true;
        }
    }





;