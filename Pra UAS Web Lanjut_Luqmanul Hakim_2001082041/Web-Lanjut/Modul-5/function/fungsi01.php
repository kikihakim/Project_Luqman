<?php
// memanggil fungsi tanpa parameter dan tanpa return value
function cetak_ganjil () {
    for ($i=0; $i<10; $i++){
        if ($i%2 == 1){
            echo "$i ";
        }
    }
}

//Pemanggilan
cetak_ganjil();

?>