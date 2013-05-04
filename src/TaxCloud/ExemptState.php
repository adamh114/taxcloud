<?php

namespace TaxCloud;


class ExemptState {

	private $StateAbbr;

	private $ReasonForExemption;

	private $IdentificationNumber;

	function __construct($stateAbbr, $reasonForExemption, $identificationNumber) {
		$this->StateAbbr = $stateAbbr;
		$this->ReasonForExemption = $reasonForExemption;
		$this->IdentificationNumber = $identificationNumber;
	}

	function setStateAbbr($stateAbbr) {
		$this->StateAbbr = $stateAbbr;
	}

	function getStateAbbr() {
		return $this->StateAbbr;
	}

	function setReasonForExemption($reasonForExemption) {
		$this->ReasonForExemption = $reasonForExemption;
	}

	function getReasonForExemption() {
		return $this->ReasonForExemption;
	}

	function setIdentificationNumber($identificationNumber) {
		$this->IdentificationNumber = $identificationNumber;
	}

	function getIdentificationNumber() {
		return $this->IdentificationNumber;
	}

}