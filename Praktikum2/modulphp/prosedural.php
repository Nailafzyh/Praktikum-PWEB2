<?php
$nim = "23001";
$nama = "Andi";
$prodi = "Sistem Informasi";
$semester = 4;

function tampilkanData($nim, $nama, $prodi, $semester)
{
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
    echo "================================";
}

tampilkanData($nim, $nama, $prodi, $semester);
//semisal data lebih dari satu menggunakan pemanggail di tampildata 

?>