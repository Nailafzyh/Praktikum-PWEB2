<?php
class pengguna {
    public $nama;
    public $email;

    public function __construct($nama, $email){
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
    public function tampilkanPeran(){
        echo "Peran: Pengguna Umum<br>";
    }
}
class mahasiswa extends pengguna {
    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanData(){
        parent::tampilkanData();
        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }
    
    public function tampilkanPeran(){
        echo "Peran: Mahasiswa<br>";
    } 
}
class dosen extends pengguna {
    private $nidn;
    private $bidangKeahlian;

    public function __construct($nama, $email, $nidn, $bidangKeahlian){
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }
    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIDN: " . $this->nidn . "<br>";
        echo "Bidang Keahlian: " . $this ->bidangKeahlian . "<br>";
    }
    public function tampilkanPeran(){
        echo "Peran: Dosen<br>";
    }
} 
class administrasi extends pengguna {
    public $idPegawai;
    public $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian){
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "ID Pegawai: " . $this->idPegawai . "<br>";
        echo "Bagian: " . $this->bagian . "<br>";
    }

    public function tampilkanPeran(){
        echo "Peran: Tenaga Administrasi<br>";
    }
}
$mhs = new mahasiswa("andi", "andi@gamail.com", "245730", "Sistem Informasi");
$dosen = new dosen("Budi", "budi@gmail.com", "0012986765", "Pemograman Web");
$admin = new administrasi("Yanti", "yanti@gmail.com", "ADM001", "Akademik dan Kemahasiswaan");

echo "<h2>Data Mahasiswa</h2>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();

echo "<hr>";
echo "<h2>Data Dosen</h2>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();

echo "<hr>";
echo "<h2>Data Tenaga Administrasi</h2>";
$admin->tampilkanData();
$admin->tampilkanPeran();
?>