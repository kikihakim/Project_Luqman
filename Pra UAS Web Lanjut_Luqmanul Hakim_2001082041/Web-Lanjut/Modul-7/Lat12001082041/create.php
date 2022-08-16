<?php
//koneksi ke mysql
require_once('koneksi.php');

//Proses Insert data ke table prodi
$nama_prodi="Teknik Komputer";
$sql="INSERT INTO tb_prodi_2001082041 VALUE (NULL, '$nama_prodi')";
$hasil= mysqli_query($db,$sql);
if($hasil){
    echo "Data berhasil di tambahkan";
}else{
    echo "Data gagal di tambahkan";
}