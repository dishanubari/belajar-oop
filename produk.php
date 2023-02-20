<?php

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->penulis";
    }
}

//$produk1 = new Produk();
//$produk1->judul = "Doraemon";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = "PES";
//var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Hujan";
$produk3->penulis = "Tere Liye";
$produk3->penerbit = "PT Bentang Aksara";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();