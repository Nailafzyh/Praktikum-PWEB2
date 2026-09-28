<?php
class Persegi {
    public $panjang;
    public $lebar;

   
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

   
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

   
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }

    
    public function cetakHasil() {
        echo "Panjang          : " . $this->panjang . "<br>";
        echo "Lebar            : " . $this->lebar . "<br>";
        echo "Luas Persegi     : " . $this->hitungLuas() . "<br>";
        echo "Keliling Persegi : " . $this->hitungKeliling() . "<br><br>";
    }
}


$persegi1 = new Persegi(10, 5);
$persegi1->cetakHasil();

$persegi2 = new Persegi(15, 8);
$persegi2->cetakHasil();
?>