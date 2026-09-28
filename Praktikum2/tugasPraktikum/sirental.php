<?php
class Kendaraan
{
    // Property 
    public $nomor;
    public $merk;
    public $jenis;

    // Method 1
    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk            : " . $this->merk . "<br>";
        echo "Jenis           : " . $this->jenis . "<br>";
    }

    // Method 2
    public function statusKendaraan()
    {
        echo "Status          : Tersedia untuk disewa<br>";
    }
}

class Pelanggan
{
    // Property
    public $id;
    public $nama;
    public $alamat;

    // Method 1
    public function tampilkanData()
    {
        echo "ID Pelanggan    : " . $this->id . "<br>";
        echo "Nama Pelanggan  : " . $this->nama . "<br>";
        echo "Alamat          : " . $this->alamat . "<br>";
    }

    // Method 2
    public function sewaKendaraan($kendaraan)
    {
        echo "Status Sewa     : Pelanggan " . $this->nama . " berhasil menyewa kendaraan  " . $kendaraan->merk . "  (" . $kendaraan->nomor . ").<br>";
    }
}

// implemen objct
echo "<h3>=== DATA KENDARAAN ===</h3>";
$kendaraan1 = new Kendaraan();
$kendaraan1->nomor = "B 1234 XYZ";
$kendaraan1->merk = "Toyota Avanza";
$kendaraan1->jenis = "Mobil";
$kendaraan1->tampilkanData();
$kendaraan1->statusKendaraan();

echo "<br>";

$kendaraan2 = new Kendaraan();
$kendaraan2->nomor = "D 5678 ABC";
$kendaraan2->merk = "Honda Beat";
$kendaraan2->jenis = "Motor";
$kendaraan2->tampilkanData();
$kendaraan2->statusKendaraan();

echo "<hr>";

echo "<h3>======= DATA PELANGGAN & TRANSAKSI =======</h3>";
$pelanggan1 = new Pelanggan();
$pelanggan1->id = "P001";
$pelanggan1->nama = "Budi Santoso";
$pelanggan1->alamat = "Jl. Merdeka No. 10";
$pelanggan1->tampilkanData();
$pelanggan1->sewaKendaraan($kendaraan1);

echo "<br>";

$pelanggan2 = new Pelanggan();
$pelanggan2->id = "P002";
$pelanggan2->nama = "Siti Aminah";
$pelanggan2->alamat = "Jl. Sudirman No. 45";
$pelanggan2->tampilkanData();
$pelanggan2->sewaKendaraan($kendaraan2);
?>