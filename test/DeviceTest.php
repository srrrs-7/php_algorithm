<?php
    require_once("inheritance/phone.php");

    $phone = new Phone("iphone");
    $phone->call_parent();
    var_dump($phone);