<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    
    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br>";
    }

}
//mahs 1
$mhs1 = new Mahasiswa();

$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;

$mhs1->tampilkanData();
echo "<br>";

//mhs 2
$mhs2 = new Mahasiswa();

$mhs2->nim = "23002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;

echo "Prodi Mahasiswa 2: " . $mhs2->prodi;
?>