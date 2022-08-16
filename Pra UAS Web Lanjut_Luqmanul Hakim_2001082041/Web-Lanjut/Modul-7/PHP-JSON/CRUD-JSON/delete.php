<?php
extract($_GET);
$result = array();

//koneksi ke MySql
require_once('koneksi.php');
if(isset($id_mhs)){

    $sql="DELETE FROM tb_mahasiswa WHERE id_mhs='$id_mhs'";
    $hasil = mysqli_query($db, $sql);
    if($hasil){
        $result['success'] = 1;
        $result['message'] = "Data Berhasil di Delete";
    }else{
        $result['success'] = 0;
        $result['message'] = "Data Gagal di Delete";
    }
    echo json_encode($result);
}else{
    $result['success'] = 0;
    $result['message'] = "Halaman Tidak Bisa Di Akses";
    echo json_encode($result);
}
mysqli_close($db);