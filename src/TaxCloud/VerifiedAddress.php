<?php

namespace TaxCloud;

class VerifiedAddress {

	private $ErrNumber;
	private $ErrDescription;

	function __construct() {
	}

	function setErrNumber($errNumber) {
		$this->ErrNumber = $errNumber;
	}

	function getErrNumber() {
		return $this->ErrNumber;
	}

	function setErrDescription($errDescription) {
		$this->ErrDescription = $errDescription;
	}

	function getErrDescription() {
		return $this->ErrDescrption;
	}

}