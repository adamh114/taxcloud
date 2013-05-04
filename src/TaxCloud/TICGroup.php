<?php

namespace TaxCloud;

class TICGroup {

	private $GroupID;
	private $Description;

	function __construct($groupID, $description) {
		$this->GroupID = $groupID;
		$this->Description = $description;
	}

	function setGroupID($groupID) {
		$this->GroupID = $groupID;
	}

	function getGroupID() {
		return $this->GroupID;
	}

	function setDescription($description) {
		$this->Description = $description;
	}

	function getDescription() {
		return $this->Description;
	}
}