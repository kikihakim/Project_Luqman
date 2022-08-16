<?php
//Cara kedua mengambil nilai input pada form

  extract($_POST);
  if (isset($Submit)){
      echo "Kritik / saran Anda Adalah : <br>";
      echo "<font color=blue><b>$saran</b></font> <br>";
      echo "<a href='text-area.php'> Back </a>";
}