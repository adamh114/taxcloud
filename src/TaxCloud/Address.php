<?php

namespace TaxCloud;

class Address {

 	private $Address1;

 	private $Address2;

 	private $City;

 	private $State;

 	private $Zip5;

 	private $Zip4;

 	function __construct() {
	}

 	function setAddress1($address1) {
 		$this->Address1 = $address1;
 	}

 	function getAddress1() {
 		return $this->Address1;
 	}

 	function setAddress2($address2) {
 		$this->Address2 = $address2;
 	}

 	function getAddress2() {
 		return $this->Address2;
 	}

 	function setCity($city) {
 		$this->City = $city;
 	}

 	function getCity() {
 		return $this->City;
 	}

 	function setState($state) {
 		$this->State = $state;
 	}

 	function getState() {
 		return $this->State;
 	}

 	function setZip5($zip5) {
 		$this->Zip5 = $zip5;
 	}

 	function getZip5() {
 		return $this->Zip5;
 	}

 	function setZip4($zip4) {
 		$this->Zip4 = $zip4;
 	}

 	function getZip4() {
 		return $this->Zip4;
 	}

}