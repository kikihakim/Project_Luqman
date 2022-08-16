<?php
//Cara kedua mengambil nilai input pada form

  extract($_POST);
  if (isset($Login)){
      if ($username == "luqman" && $password == "123") {
        echo "<h2>Login Berhasil</h2>";
      } else {
        echo "<h2>Login Gagal</h2>";
      }
      echo "<a href='input_text_password.php'> Back </a>";
}