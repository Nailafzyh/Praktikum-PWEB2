<?php
class mahasiswa{
    private $nama;

    public function getnama(){
        return $this->nama;
    }

    public function setnama($nama){
        $this->nama=$nama;
    }

}

$mhs1 = new mahasiswa();
$mhs1->setnama("Andi");
echo "Nama Mahasiswa: " . $mhs1->getnama();
?>