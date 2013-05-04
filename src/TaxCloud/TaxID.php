<?php

namespace TaxCloud;


class TaxID {

	private $TaxType;

	private $IDNumber;

	private $StateOfIssue;

	function __construct($taxType = null, $idNumber = null, $stateOfIssue = null) {
		$this->TaxType = $taxType;
		$this->IDNumber = $idNumber;
		$this->StateOfIssue = $stateOfIssue;
	}

	function setTaxType($taxIDType) {
		$this->TaxType = $taxIDType;
	}

	function getTaxType() {
		return $this->TaxType;
	}

	function setIDNumber($idNumber) {
		$this->IDNumber = $idNumber;
	}

	function getIDNumber() {
		return $this->IDNumber;
	}

	function setStateOfIssue($stateOfIssue) {
		$this->StateOfIssue = $stateOfIssue;
	}

	function getStateOfIssue() {
		return $this->StateOfIssue;
	}
}
