<?php

namespace TaxCloud;

class ExemptionCertificate 
{

	private $CertificateID;
	
	private $Detail;
	
	function __contruct() {
	}
	
	function setCertificateID($certificateID) {
		$this->CertificateID = $certificateID;
	}
	
	function getCertificateID() {
		return $this->CertificateID;
	}
	
	function setDetail($exemptionCertificateDetail) {
		$this->Detail = $exemptionCertificateDetail;
	}
	
	function getDetail() {
		return $this->Detail;
	}
}