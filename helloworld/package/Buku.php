<?php 
class Buku extends Produk {

	function getInfoProduk() {
		return parent::getInfoProduk() . " | jumlah halaman: $this->jmlHalaman";
	}
}