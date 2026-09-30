<?php

class Buku {

    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {

        $this->judul = $judul;
        $this->penulis = $penulis;

    }

    public function tampilkanData() {

        echo "===========Profil Buku========= <br>";
        echo "Judul : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis;

    }

}

$buku1 = new Buku(
    "Pemrograman PHP",
    "Nia"
);

$buku1->tampilkanData();

?>