<?php

$val= -10;
if($val<0){
    $huruf = "BL";
} elseif(($val >= 0) && ($val < 40)){
    $huruf = "E";
} elseif(($val >= 40) && ($val < 50)){
    $huruf = "D";
}elseif(($val >= 50) && ($val < 55)){
    $huruf = "C";
}elseif(($val >= 55) && ($val < 60)){
    $huruf = "C";
}elseif(($val >= 60) && ($val < 65)){
    $huruf = "C+";
}elseif(($val >= 65) && ($val < 70)){
    $huruf = "B-";
}elseif(($val >= 70) && ($val < 75)){
    $huruf = "B";
}elseif(($val >= 75) && ($val < 80)){
    $huruf = "B+";
}elseif(($val >= 80) && ($val < 85)){
    $huruf = "A-";
}elseif(($val >= 85) && ($val <= 100)){
    $huruf = "A";
} else {
    $huruf = "Nilai yang dimasukkan maximal 100";
}
echo "Nilai $val : $huruf";