<?php
/*
$level = 5;

switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    case 5:
        echo "Pelajari JQuery";
        break;
    default:
        echo "Kamu bukan programmer!";
}
*/

$nilai= 60;
switch ($nilai) {

    case $nilai > 80 and $nilai <=100:
        # code...
        echo "Sangat Baik";
        break;
    
    case $nilai > 70 and $nilai <=80:
        # code...
        echo "Baik";
        break;

    case $nilai > 60 and $nilai <=70:
        # code...
        echo "Cukup";
        break;

    default:
        # code...
        echo "Gagal";
        break;
}