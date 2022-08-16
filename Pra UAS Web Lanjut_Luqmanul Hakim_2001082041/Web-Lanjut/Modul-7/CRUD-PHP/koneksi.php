<?php

$server = "localhost";
$user ="root";
$password = "";
$nama_database = "db_kampus";
$db = mysqli_connect($server, $user, $password, $nama_database);
if(!$db){
    die("Gagal Terhubung dengan Databse : " . mysqli_connect_error());
}