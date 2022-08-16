<?php
$listMahasiswaJSON = '[
    { "nama" : "Luqmanul Hakim" },
    { "nama" : "Renza Ilham Risqi" },
    { "nama" : "Taufan Aji" },
    { "nama" : "Rahmad Dwi Oktano" }
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa){
    echo "{$key}. Nama: {$mahasiswa->nama} <br>";
}