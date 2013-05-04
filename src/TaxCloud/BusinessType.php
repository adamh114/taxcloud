<?php

namespace TaxCloud;

class BusinessType {

	public static $AccommodationAndFoodServices = "AccommodationAndFoodServices";
	public static $Agricultural_Forestry_Fishing_Hunting = "Agricultural_Forestry_Fishing_Hunting";
	public static $Construction = "Construction";
	public static $FinanceAndInsurance = "FinanceAndInsurance";
	public static $Information_PublishingAndCommunications = "Information_PublishingAndCommunications";
	public static $Manufacturing = "Manufacturing";
	public static $Mining = "Mining";
	public static $RealEstate = "RealEstate";
	public static $RentalAndLeasing = "RentalAndLeasing";
	public static $RetailTrade = "RetailTrade";
	public static $TransportationAndWarehousing = "TransportationAndWarehousing";
	public static $Utilities = "Utilities";
	public static $WholesaleTrade = "WholesaleTrade";
	public static $BusinessServices = "BusinessServices";
	public static $ProfessionalServices = "ProfessionalServices";
	public static $EducationAndHealthCareServices = "EducationAndHealthCareServices";
	public static $NonprofitOrganization = "NonprofitOrganization";
	public static $Government = "Government";
	public static $NotABusiness = "NotABusiness";
	public static $Other = "Other";

	private $Value;

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
