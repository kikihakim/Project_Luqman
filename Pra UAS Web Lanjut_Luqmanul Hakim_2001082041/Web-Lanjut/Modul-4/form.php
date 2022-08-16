<form action="" method="post" name="input">

    Nama Anda    : <input type="text" name="nama_lengkap"><br>
    No. BP       : <input type="text" name="no_bp"><br>
    No. Telp     : <input type="text" name="tlpn"><br>
    Nama Ayah    : <input type="text" name="nama_ayah"><br>
    Nama Ibu     : <input type="text" name="nama_ibu"><br>
    <input type="submit" name="save" value="Input">


</form>

<?php
    /** 
    // Cara Pertama
   // echo isset($_POST['Save']);
    if (isset($_POST['Save'])){
        //cara mengambil input dari form
         echo "Nama       : ".$_POST['nama_lepkap']."<br>";
         echo "No. Bp     : ".$_POST['no_bp']."<br>";
         echo "No. telp   : ".$_POST['tlpn']."<br>";
         echo "Nama Ayah  : ".$_POST['nama_ayah']."<br>";
         echo "Nama Ibu   : ".$_POST['nama_ibu'];
    }
    */

  //Cara kedua mengambil nilai input pada form

  extract($_POST);
  if (isset($save)){
    echo "Nama : $nama_lengkap <br>";
    echo "No Bp : $no_bp <br>";
    echo "No Tlpn : $tlpn <br>";
    echo "Nama Ayah : $nama_ayah <br>";
    echo "Nama Ibu : $nama_ibu <br>";

  }