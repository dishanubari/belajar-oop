<?php

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
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

echo "Novel : $produk3->penulis, $produk3->penerbit";