<?php 
class Game extends Produk {
	
	function getInfoProduk() {
		return parent::getInfoProduk() . " | menit bermain: $this->jmlHalaman";
	}
}