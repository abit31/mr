<?php
$server = "localhost"; //nama server
$username = "root"; // username 
$password = ""; //  standarnya kosong
$database = "crud_sederhana"; // buat nama database harus sama 

// Koneksi dan memilih database di server
($GLOBALS["___mysqli_ston"] = mysqli_connect($server, $username, $password)) or die("Koneksi gagal");
mysqli_select_db($GLOBALS["___mysqli_ston"], $database) or die("Database tidak bisa dibuka");
?>