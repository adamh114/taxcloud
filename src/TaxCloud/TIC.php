<?php

namespace TaxCloud;


class TIC {

	private $TICID;

	private $Description;

	function __construct($ticID, $description) {
		$this->TICID = $ticID;
		$this->Description = $description;
	}

	function setTICID($ticID) {
		$this->TICID = $ticID;
	}

	function getTICID() {
		return $this->TICID;
	}

	function setDescription() {
		$this->Description = description;
	}

	function getDescription() {
		return $this->Description;
	}

}