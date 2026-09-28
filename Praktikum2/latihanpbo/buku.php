<?php
class Buku {
    public $judul;
    public $penulis;

    public function cetakInfo() {
        echo "Judul Buku: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
    }
}


$buku1 = new Buku();
$buku1->judul = "Belajar Pemrograman PHP";
$buku1->penulis = "Budi Raharjo";


$buku1->cetakInfo();
?>