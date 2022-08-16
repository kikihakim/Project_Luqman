<?php

//Koneksi ke mysql
require_once('koneksi.php');

//Proses delete data ke table jurusan
$id_jurusan="1";

$sql="DELETE from  tb_jurusan WHERE id_jurusan='$id_jurusan'";
$hasil= mysqli_query($db, $sql);
if ($hasil){
    echo "Data berhasil di delete";
} else {
    echo "Data gagal di delete";
}