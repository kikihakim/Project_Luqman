<?php

//koneksi ke mysql
require_once('koneksi.php');

//Proses Update data ke table prodi
$id_prodi="1";
$nama_prodi="Teknik Komputer (TKom)";

$sql = " UPDATE tb_prodi_2001082041 SET nama_prodi='$nama_prodi' WHERE id_prodi='$id_prodi'";
$hasil= mysqli_query($db,$sql);
if ($hasil){
    echo "Data berhasil di update";
} else {
    echo "Data gagal di update";
}