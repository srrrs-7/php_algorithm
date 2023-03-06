<?php

    use PHPUnit\Framework\TestCase;

    require("basic/validation.php");

    class ValidationTest extends TestCase {

        // correct test pattern
        public function test_validation1() {
            $valid = new Validation("Srrrs4510", "Srrrs4510");

            $is_valid = $valid->sanitize();
            $this->assertEquals(true, $is_valid);

            $is_valid = $valid->check_len();
            $this->assertEquals(true, $is_valid);

            $is_valid = $valid->check_int();
            $this->assertEquals(true, $is_valid);

            $is_valid = $valid->check_str();
            $this->assertEquals(true, $is_valid);

            $is_valid = $valid->check_include_upper_case();
            $this->assertEquals(true, $is_valid);

            $is_valid = $valid->check_confirm();
            $this->assertEquals(true, $is_valid);
        }

        // sanitize error pattern
        public function test_sanitize() {
            $valid = new Validation("&", "&");
            $is_valid = $valid->sanitize();
            $this->assertEquals(false, $is_valid);

            $valid2 = new Validation(" ", " ");
            $is_valid = $valid2->sanitize();
            $this->assertEquals(false, $is_valid);

            $valid3 = new Validation("false", "false");
            $is_valid = $valid3->sanitize();
            $this->assertEquals(true, $is_valid);
        }

        // upper case error pattern
        public function test_upper_case() {
            $valid = new Validation("srrrs4510", "srrrs4510");
            // failure
            $is_valid = $valid->check_include_upper_case();
            $this->assertEquals(false, $is_valid);
        }
    }