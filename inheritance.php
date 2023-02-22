<?php

use Produk as GlobalProduk;

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain; 
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoProduk(){
     $str ="{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
     return $str;
    }
}

class Novel extends Produk {
    public function getInfoProduk()
    {
        $str = "Novel : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }   
}

class Game extends Produk {
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }   
}


class CetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Novel("Hujan", "Tere Liye", "PT. Gramedia Pustaka Utama", 50000, 100, 0, "Novel");
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();