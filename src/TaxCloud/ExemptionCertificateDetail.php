<?php

namespace TaxCloud;


class ExemptionCertificateDetail {

	private $ExemptStates = Array();

	private $SinglePurchase;

	private $SinglePurchaseOrderNumber;

	private $PurchaserFirstName;

	private $PurchaserLastName;

	private $PurchaserTitle;

	private $PurchaserAddress1;

	private $PurchaserAddress2;

	private $PurchaserCity;

	private $PurchaserState;

	private $PurchaserZip;

	private $PurchaserTaxID;

	private $PurchaserBusinessType;

	private $PurchaserBusinessTypeOtherValue;

	private $PurchaserExemptionReason;

	private $PurchaserExemptionReasonValue;
	
	private $CreatedDate;

	function __construct() {
	}
	
	function setExemptStates($exemptStates) {
		$this->ExemptStates = $exemptStates;
	}
	
	function getExemptStates() {
		return $this->ExemptStates;
	}

	function setSinglePurchase($singlePurchase) {
		$this->SinglePurchase = $singlePurchase;
	}

	function getSinglePurchase() {
		return $this->SinglePurchase;
	}

	function setSinglePurchaseOrderNumber($singlePurchaseOrderNumber) {
		$this->SinglePurchaseOrderNumber = $singlePurchaseOrderNumber;
	}

	function getSinglePurchaseOrderNumber() {
		return $this->SinglePurchaseOrderNumber;
	}

	function setPurchaserFirstName($purchaserFirstName) {
		$this->PurchaserFirstName = $purchaserFirstName;
	}

	function getPurchaserFirstName() {
		return $this->PurchaserFirstName;
	}

	function setPurchaserLastName($purchaserLastName) {
		$this->PurchaserLastName = $purchaserLastName;
	}

	function getPurchaserLastName() {
		return $this->PurchaserLastName;
	}

	function setPurchaserTitle($purchaserTitle) {
		$this->PurchaserTitle = $purchaserTitle;
	}

	function getPurchaserTitle() {
		return $this->PurchaserTitle;
	}

	function setPurchaserAddress1($purchaserAddress1) {
		$this->PurchaserAddress1 = $purchaserAddress1;
	}

	function getPurchaserAddress1() {
		return $this->PurchaserAddress1;
	}

	function setPurchaserCity($purchaserCity) {
		$this->PurchaserCity = $purchaserCity;
	}

	function getPurchaserCity() {
		return $this->PurchaserCity;
	}

	function setPurchaserState($purchaserState) {
		$this->PurchaserState = $purchaserState;
	}

	function getPurchaserState() {
		return $this->PurchaserState;
	}

	function setPurchaserZip($purchaserZip) {
		$this->PurchaserZip = $purchaserZip;
	}

	function getPurchaserZip() {
		return $this->PurchaserZip;
	}

	function setPurchaserTaxID($purchaserTaxID) {
		$this->PurchaserTaxID = $purchaserTaxID;
	}

	function getPurchaserTaxID() {
		return $this->PurchaserTaxID;
	}

	function setPurchaserBusinessType($purchaserBusinessType) {
		$this->PurchaserBusinessType = $purchaserBusinessType;
	}

	function getPurchaserBusinessType() {
		return $this->PurchaserBusinessType;
	}

	function setPurchaserBusinessTypeOtherValue($purchaserBusinessTypeOtherValue) {
		$this->PurchaserBusinessTypeOtherValue = $purchaserBusinessTypeOtherValue;
	}

	function getPurchaserBusinessTypeOtherValue() {
		return $this->PurchaserBusinessTypeOtherValue;
	}

	function setPurchaserExemptionReason($purchaserExemptionReason) {
		$this->PurchaserExemptionReason = $purchaserExemptionReason;
	}

	function getPurchaserExemptionReason() {
		return $this->PurchaserExemptionReason;
	}

	function setPurchaserExemptionReasonValue($purchaserExemptionReasonValue) {
		$this->PurchaserExemptionReasonValue = $purchaserExemptionReasonValue;
	}
	
	function addExemptState($exemptState) {

		$index = sizeof($this->ExemptStates);
	//	print("<br><br>addExemptState - index: ");
	//	print_r($index);
		$this->ExemptStates[$index] = $exemptState;
	}
	
	function setCreatedDate($createdDate) {
		$this->CreatedDate = $createdDate;
	}
	
	function getCreatedDate() {
		return $this->CreatedDate;
	}
	

}
