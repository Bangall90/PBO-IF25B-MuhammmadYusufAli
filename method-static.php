<?php

class Produk {
    // CONSTANT
    const PAJAK = 0.11;

    // PROPERTY
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    // CONSTRUCTOR
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode  = $kode;
        $this->nama  = $nama;
        $this->harga = $harga;
        $this->stok  = $stok;
    }

    // METHOD
    public function hargaSetelahPajak() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

    // METHOD
    public function tampilkan() {
        echo "Produk: " . $this->nama . "<br>";
        echo "Harga: Rp" . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Pajak: " . (self::PAJAK * 100) . "%<br>";
        echo "Total harga setelah pajak: Rp" . number_format($this->hargaSetelahPajak(), 0, ',', '.') . "<br>";
    }
}

// membuat OBJEK (instansiasi)
$produk = new Produk("P001", "Laptop", 10000000, 5);

// memanggil method
$produk->tampilkan();