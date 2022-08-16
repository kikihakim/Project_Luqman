<?php
extract($_POST);
$result = array();

if(isset($_POST)){
    //Koneksi Ke Mysql
    require_once('koneksi.php');

    $sql = "INSERT INTO tb_jurusan VALUE (NULL, '$nama_jurusan')";
    $hasil = mysqli_query($db,$sql);
    if($hasil){
        $result['Success'] = 1;
        $result['Message'] = "Data Berhasil di tambahkan";
    }else{
        $result['Success'] = 0;
        $result['Message'] = "Data Gagal di tambahkan";
    }
    echo json_encode($result);
}else{
    $result['Success'] = 0;
    $result['Message'] = "Halaman Tidak Bisa Di Akses";
    echo json_encode($result);
}
mysqli_close($db);
?>