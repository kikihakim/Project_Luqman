<?php

//Koneksi Ke Mysql
require_once('koneksi.php');

//proses delete data ke table prodi
$id_prodi="1";

$sql="DELETE from  tb_prodi_2001082041 WHERE id_prodi='$id_prodi'";
$hasil= mysqli_query($db, $sql);
if ($hasil){
    echo "Data berhasil di delete";
} else {
    echo "Data gagal di delete";
}