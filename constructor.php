<?php

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct( $judul, $penulis, $penerbit, $harga ){
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


echo "Novel : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();