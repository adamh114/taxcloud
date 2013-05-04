<?php

namespace TaxCloud;

class ExemptionReason {

	public static $FederalGovernmentDepartment = "FederalGovernmentDepartment";
	public static $StateOrLocalGovernmentName = "StateOrLocalGovernmentName";
	public static $TribalGovernmentName = "TribalGovernmentName";
	public static $ForeignDiplomat = "ForeignDiplomat";
	public static $CharitableOrganization = "CharitableOrganization";
	public static $ReligiousOrEducationalOrganization = "ReligiousOrEducationalOrganization";
	public static $Resale = "Resale";
	public static $AgriculturalProduction = "AgriculturalProduction";
	public static $IndustrialProductionOrManufacturing = "IndustrialProductionOrManufacturing";
	public static $DirectPayPermit = "DirectPayPermit";
	public static $DirectMail = "DirectMail";
	public static $Other = "Other";

	function __construct($value) {
		$this->Value = $value;
	}

	function setValue($value) {
		$this->Value = $value;
	}

	function getValue() {
		return $this->Value;
	}
	
	function __toString() {
		return "Other";
	}
}