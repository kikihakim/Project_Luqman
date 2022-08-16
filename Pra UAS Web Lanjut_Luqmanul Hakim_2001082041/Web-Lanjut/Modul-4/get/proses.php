<?php

extract($_GET);
if (isset($save)){
    echo "Nama : $nama_lengkap <br>";
    echo "No Bp : $no_bp <br>";
    echo "Tempat Lahir : $tempat_lahir <br>";
    echo "No Tlpn : $tlpn <br>";
    echo "Nama Ayah : $nama_ayah <br>";
    echo "Nama Ibu : $nama_ibu <br>";
}

    echo "<br>";
    echo "<a href='form.php'>Kembali</a>";