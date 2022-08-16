<?php

//Koneksi ke mysql
require_once('koneksi.php');

//Proses insert data ke table jurusan
$nama_jurusan="Teknologi Informasi";
$sql="INSERT INTO tb_jurusan VALUE (NULL, '$nama_jurusan')";
$hasil= mysqli_query($db, $sql);
if ($hasil){
    echo "Data berhasil di tambahkan";
} else {
    echo "Data gagal di tambahkan";
}