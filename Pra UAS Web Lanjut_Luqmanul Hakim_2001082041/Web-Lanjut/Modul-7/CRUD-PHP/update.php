<?php

//Koneksi ke mysql
require_once('koneksi.php');

//Proses update data ke table jurusan
$id_jurusan="1";
$nama_jurusan="Teknologi Informasi (TI)";

$sql="UPDATE tb_jurusan SET nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'";
$hasil= mysqli_query($db, $sql);
if ($hasil){
    echo "Data berhasil di update";
} else {
    echo "Data gagal di update";
}