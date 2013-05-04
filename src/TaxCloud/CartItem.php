<?php

namespace TaxCloud;



class CartItem {

 	private $ItemID;

 	private $Index;

 	private $TIC;

 	private $Price;

 	private $Qty;

	function __construct() {
 	}

 	function setItemID($itemID) {
 		$this->ItemID = $itemID;
 	}

 	function getItemID() {
 		return $this->ItemID;
 	}

 	function setIndex($index) {
 		$this->Index = $index;
 	}

 	function getIndex() {
 		return $this->Index;
 	}

 	function setTIC($TIC) {
 		$this->TIC = $TIC;
 	}

 	function getTIC() {
 		return $this->TIC;
 	}

 	function setPrice($price) {
 		$this->Price = $price;
 	}

 	function getPrice() {
 		return $this->Price;
 	}

 	function setQty($qty) {
 		$this->Qty = $qty;
 	}

 	function getQty() {
 		return $this->Qty;
 	}

}