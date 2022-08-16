<?php
extract($_POST);
$result = array();

//koneksi ke MySql
require_once('koneksi.php');
if(isset($_POST)){

    $sql="INSERT INTO tb_mahasiswa VALUE (NULL, '$nama_mhs','$nobp_mhs','$jurusan','$prodi')";
    $hasil = mysqli_query($db, $sql);
    if($hasil){
        $result['success'] = 1;
        $result['message'] = "Data Berhasil di tambahkan";
    }else{
        $result['success'] = 0;
        $result['message'] = "Data Gagal di tambahkan";
    }
    echo json_encode($result);
}else{
    $result['success'] = 0;
    $result['message'] = "Halaman Tidak Bisa Di Akses";
    echo json_encode($result);
}
mysqli_close($db);