<?php

class Novel extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct( $judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }   
}