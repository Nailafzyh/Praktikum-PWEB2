<?php
class Produk{
    public $kode;
    public $nama;
    public $harga;
    public $stok;


    public function __construct($kode, $nama, $harga, $stok){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
      
    }

    public function tampilkanData(){
        echo "<h3>Data Produk</h3>";
        echo "Kode : " . $this->kode . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Harga : Rp." . $this->harga . "<br>";
        echo "Stok : " . $this->stok . "<br>";
    }

    public function hitungNilaiStok(){
        $nilaiStok = $this->harga * $this->stok;
        echo "Nilai Stok : Rp. " . $nilaiStok;
    }

    public function hitungDiskon(){
        $diskon = $this->harga * 0.20;
        echo "<br> Diskon : Rp. " . $diskon ;
    }

}
$produk1 = new Produk(
    "P001",
    "Laptop",
    7000000,
    10
);

$produk2 = new Produk(
    "P002",
    "Mouse",
    150000,
    25
);

$produk1->tampilkanData();
$produk1->hitungNilaiStok();
$produk1->hitungDiskon();
echo "<hr>";
$produk2->tampilkanData();
$produk2->hitungNilaiStok();
$produk2->hitungDiskon();
?>