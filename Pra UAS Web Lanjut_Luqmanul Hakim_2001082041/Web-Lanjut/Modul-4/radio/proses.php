<?php
//Cara kedua mengambil nilai input pada form

  extract($_POST);
  if (isset($Submit)){
      echo "Jurusan Anda dan Prodi  : <b><font color='red'>$jurusan - $prodi</font></b> <br>";
      echo "<a href='input_radio.php'> Back </a>";
}