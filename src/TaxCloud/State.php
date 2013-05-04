<?php

namespace TaxCloud;


class State {

	public static $AL = "AL";
	public static $AK = "AK";
	public static $AZ = "AZ";
	public static $AR = "AR";
	public static $CA = "CA";
	public static $CO = "CO";
	public static $CT = "CT";
	public static $DE = "DE";
	public static $DC = "DC";
	public static $FL = "FL";
	public static $GA = "GA";
	public static $HI = "HI";
	public static $ID = "ID";
	public static $IL = "IL";
	public static $IN = "IN";
	public static $IA = "IA";
	public static $KS = "KS";
	public static $KY = "KY";
	public static $LA = "LA";
	public static $ME = "ME";
	public static $MD = "MD";
	public static $MA = "MA";
	public static $MI = "MI";
	public static $MN = "MN";
	public static $MS = "MS";
	public static $MO = "MO";
	public static $MT = "MT";
	public static $NE = "NE";
	public static $NV = "NV";
	public static $NH = "NH";
	public static $NJ = "NJ";
	public static $NM = "NM";
	public static $NY = "NY";
	public static $NC = "NC";
	public static $ND = "ND";
	public static $OH = "OH";
	public static $OK = "OK";
	public static $OR = "OR";
	public static $PA = "PA";
	public static $RI = "RI";
	public static $SC = "SC";
	public static $SD = "SD";
	public static $TN = "TN";
	public static $TX = "TX";
	public static $UT = "UT";
	public static $VT = "VT";
	public static $VA = "VA";
	public static $WA = "WA";
	public static $WV = "WV";
	public static $WI = "WI";
	public static $WY = "WY";

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

}
