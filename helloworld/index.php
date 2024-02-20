<?php 

// class Produk {
// 	protected $kategori,
// 			  $judul,
// 			  $author,
// 			  $harga;

// 	public $jmlHalaman;

// 	function __construct($kategori = "kategori", $judul = "judul", $author, $jmlHalaman, $harga) {
// 		$this->kategori = $kategori;
// 		$this->judul = $judul;
// 		$this->author = $author;
// 		$this->jmlHalaman = $jmlHalaman;
// 		$this->harga = $harga;
// 	}

// 	function getInfoProduk() {
// 		return "Kategori: $this->kategori | judul: $this->judul | author: $this->author | harga: $this->harga";
// 	}

// 	function getKategori() {
// 		return $this->kategori;
// 	}
// }



// class Game extends Produk {
	
// 	function getInfoProduk() {
// 		return parent::getInfoProduk() . " | menit bermain: $this->jmlHalaman";
// 	}
// }

// class Buku extends Produk {

// 	function getInfoProduk() {
// 		return parent::getInfoProduk() . " | jumlah halaman: $this->jmlHalaman";
// 	}
// }

require "init.php";

$produk1 = new Buku("buku", "kentut kuda", "Radil", 200, 20000);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk1->getKategori();

echo "<br>";

$produk2 = new Game("game", "only up", "romzy", 200, 100000);
echo $produk2->getInfoProduk();

echo "<br>";

$produk3 = new Produk("random", "random", "orang", 0, 10);
echo $produk3->getInfoProduk();

 ?>