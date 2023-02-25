<?php

require_once 'App/Produk/InfoProduk.php';
require_once 'App/Produk/Novel.php';
require_once 'App/Produk/Produk.php';
require_once 'App/Produk/Game.php';
require_once 'App/Produk/CetakInfoProduk.php';


$produk1 = new Novel("Hujan", "Tere Liye", "PT. Gramedia Pustaka Utama", 50000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();