<?php
class Buku
{
    // Property
    public $kode;
    public $judul;
    public $penulis;
    public $tahun;

    // Method untuk menampilkan data
    public function tampilkanData()
    {
        echo "=-=-=-=-=-=-= DATA BUKU =-=-=-=-=-=-=-=<br>";
        echo "Kode Buku   : " . $this->kode . "<br>";
        echo "Judul Buku  : " . $this->judul . "<br>";
        echo "Penulis     : " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahun . "<br><br>";
    }
}

// objk 1
$buku1 = new Buku();

// propery buju 1
$buku1->kode = "A001";
$buku1->judul = "Pemrograman Berorientasi Objek dengan PHP";
$buku1->penulis = "Andi Prasetyo S.H";
$buku1->tahun = 2024;

// Tampilkan data buku 1
$buku1->tampilkanData();

?>