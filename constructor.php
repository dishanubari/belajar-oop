<?php

use Produk as GlobalProduk;

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk("Hujan", "Tere Liye", "PT Bentang Aksara", 50000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$produk3 = new Produk("Dragonball");

echo "Novel : " . $produk1->getLabel(); 
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);