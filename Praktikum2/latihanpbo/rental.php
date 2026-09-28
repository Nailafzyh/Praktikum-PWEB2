<?php
// Class Kendaraan
class Kendaraan {
    public $nomor;
    public $merk;
    public $jenis;

    public function __construct($nomor, $merk, $jenis) {
        $this->nomor = $nomor;
        $this->merk = $merk;
        $this->jenis = $jenis;
    }

    public function tampilkanDataKendaraan() {
        echo "<b>Informasi Kendaraan:</b><br>";
        echo "Nomor Polisi : " . $this->nomor . "<br>";
        echo "Merk         : " . $this->merk . "<br>";
        echo "Jenis        : " . $this->jenis . "<br>";
    }

    public function statusKendaraan() {
        echo "Status       : Tersedia untuk disewa<br><br>";
    }
}

// Class Pelanggan
class Pelanggan {
    public $id;
    public $nama;
    public $alamat;

    public function __construct($id, $nama, $alamat) {
        $this->id = $id;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function tampilkanDataPelanggan() {
        echo "<b>Informasi Pelanggan:</b><br>";
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama Pelanggan: " . $this->nama . "<br>";
        echo "Alamat       : " . $this->alamat . "<br>";
    }

    public function sewaKendaraan($merkKendaraan) {
        echo "Aksi         : " . $this->nama . " berhasil menyewa kendaraan " . $merkKendaraan . "<br><hr>";
    }
}

//Kendaraan
$kendaraan1 = new Kendaraan("B 1234 XYZ", "Toyota Avanza", "Mobil");
$kendaraan1->tampilkanDataKendaraan();
$kendaraan1->statusKendaraan();

//Pelanggan
$pelanggan1 = new Pelanggan("P001", "Andi Pratama", "Jl. Merdeka No. 10");
$pelanggan1->tampilkanDataPelanggan();
$pelanggan1->sewaKendaraan($kendaraan1->merk);
?>