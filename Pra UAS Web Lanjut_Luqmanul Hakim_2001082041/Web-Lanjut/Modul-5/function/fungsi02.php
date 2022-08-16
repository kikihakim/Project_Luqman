<?php
function cetak_ganjil ($awal, $akhir){
    for ($i=$awal; $i<$akhir; $i++){
        if ($i%2 == 1){
            echo "$i ";
        }
    }
}
//Pemanggilan fungsi
$a = 2;
$b = 10;
echo "<b>Bilangan Ganjil dari $a sampai $b : </br><br>";
cetak_ganjil($a,$b);
?>