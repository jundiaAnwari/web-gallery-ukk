<?php
class Produk {
	protected $kategori,
			  $judul,
			  $author,
			  $harga;

	public $jmlHalaman;

	function __construct($kategori = "kategori", $judul = "judul", $author, $jmlHalaman, $harga) {
		$this->kategori = $kategori;
		$this->judul = $judul;
		$this->author = $author;
		$this->jmlHalaman = $jmlHalaman;
		$this->harga = $harga;
	}

	function getInfoProduk() {
		return "Kategori: $this->kategori | judul: $this->judul | author: $this->author | harga: $this->harga";
	}

	function getKategori() {
		return $this->kategori;
	}
}