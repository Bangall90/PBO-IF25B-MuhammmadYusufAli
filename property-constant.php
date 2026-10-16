<?php

class Produk {
    // CONSTANT
    const PAJAK = 0.11;

    // PROPERTY
    public $kode = "P001";
    public $nama = "laptop";
    public $harga = 10000000;
    public $stok = 5;
}

$produk = new Produk();

$total = $produk->harga + ($produk->harga * Produk::PAJAK);

echo "Produk: " . $produk->nama . "<br>";
echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.') . "<br>";
echo "Stock: " . $produk->stok . "<br>";
echo "Pajak: " . (Produk::PAJAK * 100) . "%<br>";

echo "Total harga setelah pajak: Rp" . number_format($total, 0, ',','.');
