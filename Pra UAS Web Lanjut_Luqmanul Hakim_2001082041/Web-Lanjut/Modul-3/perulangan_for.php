<?php
/*
// contoh 1 //
for ($i = 1; $i <= 10; $i++) {
    echo "$i<br>";
}
*/

/*
// Soal 1//
for ($i=5; $i <= 7; $i++) {
    # code...
    echo "$i<br>";
}

echo "<br><br>";
// Soal 2//
for ($i2=1; $i2 <= 9; $i2+=2) {
    # code...
    echo "$i2<br>";
}

echo "<br><br>";
// Soal 3//
for ($i3=2; $i3 <= 10; $i3+=2) {
    # code...
    echo "$i3<br>";
}
*/

/*
$bulan=10;
$total_pinjam = 10000000;
$iuran_pokok=$total_pinjam/$bulan;
$margin= 0.1 * $iuran_pokok;
$iuran_perbulan=$iuran_pokok+$margin;
$total_keuntungan=0;

for ($i4=1; $i4 <= $bulan; $i4++) {
    # code...
    echo "Pembayaran Bulan ke $i4 = $iuran_perbulan <br>";
    $total_keuntungan+=$margin;
}
echo "Total Margin/Keuntungan = $total_keuntungan";
*/

echo "<br><br><br>";
/* Penulisan ke 2 */
for ($i5 = 1; ; $i5++) {
    if ($i5 > 10) {
        break;
    }
    echo "$i5";
}
echo "<br><br>";

/* Penulisan ke 3 */
$i6 = 1;
for (; ; ) {
    if ($i6 > 10) {
        break;
    }
    echo "$i6";
    $i6++;
}echo "<br><br>";

/* Penulisan ke 4 */
for ($i7 = 1; $i7 <= 10; print "$i7", $i7++);