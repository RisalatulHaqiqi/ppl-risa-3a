<?php 
//file
require_once "Validator.php";

try {
    $result = validatename("Risalatul Haqiqi");
    echo "PASS: nama Risalatul Haqiqi sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: nama tidak valid. Error: ". $e->getmessname() . "\n";
}

try {
    $result = validateName("Risa 123");
    echo "PASS: Nama 'Risa 123' sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: Nama 'Risa 123' tidak valid. Error: " . $e->getMessage() . "\n";
}