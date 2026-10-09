<?php
// File: Validator.php

// Fungsi baru sesuai soal nomor 
function ValidateName($name) {
    // 1. Cek apakah nama kosong atau hanya berisi spasi
    if (empty(trim($name))) {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }

    // 2. Cek apakah nama hanya berisi huruf dan spasi
    if (!preg_match("/^[a-zA-Z\s]+$/", trim($name))) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }

    return true;
}