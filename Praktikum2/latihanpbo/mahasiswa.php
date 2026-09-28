<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    
    public function __construct($nim, $nama, $prodi, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->nilai = $nilai;
    }

    public function tentukanGrade() {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

   
    public function tampilkanData() {
        echo "NIM     : " . $this->nim . "<br>";
        echo "Nama    : " . $this->nama . "<br>";
        echo "Prodi   : " . $this->prodi . "<br>";
        echo "Nilai   : " . $this->nilai . "<br>";
        echo "Grade   : " . $this->tentukanGrade() . "<br><br>";
    }
}


$mhs1 = new Mahasiswa("23001", "Andi", "Sistem Informasi", 85);
$mhs1->tampilkanData();

$mhs2 = new Mahasiswa("23002", "Budi", "Sistem Informasi", 72);
$mhs2->tampilkanData();
?>