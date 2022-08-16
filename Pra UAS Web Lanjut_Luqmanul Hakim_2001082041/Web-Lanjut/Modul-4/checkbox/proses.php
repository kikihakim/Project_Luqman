<?php
//Cara kedua mengambil nilai input pada form

  extract($_POST);
  if (isset($Submit)){
      echo "Band Favorit Anda Adalah : <br>";
        if  (isset($Band01)){
            echo "+ " . $Band01 . "<br>";
        }
        if (isset($Band02)){
            echo "+ " . $Band02 . "<br>";
        }
        if (isset($Band03)){
            echo "+ " . $Band03 . "<br>";
        }
        if (isset($Band04)){
            echo "+ " . $Band04 . "<br>";
        }
        
        echo "<a href='input_checkbox.php'> Back </a>";
}