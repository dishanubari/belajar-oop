<?php

use Produk as GlobalProduk;

class Produk {
    public $judul,
            $penulis,
            $penerbit;

    protected $harga;
        

    public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
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
    public $jmlHalaman;

    public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Novel : " . parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }   
}

class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga, $waktuMain );
   
        $this->waktuMain = $waktuMain;
    }


    public function getHarga(){
        return $this->harga;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() ."   - {$this->waktuMain} Jam.";
        return $str;
    }   
}


class CetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Novel("Hujan", "Tere Liye", "PT. Gramedia Pustaka Utama", 50000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


echo $produk2->getHarga();