<?php
extract($_POST);
$result = array();

//koneksi ke MySql
require_once('koneksi.php');
if(isset($_POST)){

    $sql="UPDATE tb_mahasiswa 
            SET nama_mhs='$nama_mhs',nobp_mhs='$nobp_mhs',jurusan='$jurusan',prodi='$prodi'
                WHERE id_mhs='$id_mhs'";
    $hasil = mysqli_query($db, $sql);
    if($hasil){
        $result['success'] = 1;
        $result['message'] = "Data Berhasil di Update";
    }else{
        $result['success'] = 0;
        $result['message'] = "Data Gagal di Update";
    }
    echo json_encode($result);
}else{
    $result['success'] = 0;
    $result['message'] = "Halaman Tidak Bisa Di Akses";
    echo json_encode($result);
}
mysqli_close($db);