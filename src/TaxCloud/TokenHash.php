<?php


namespace TaxCloud;

/**
 * This class is used for the Express Checkout process to correlate 
 * PayPal tokens to customers.
 */
class TokenHash {

	private function __construct() {
		//load serialized data, if any
		 include("classarm *.log.inc");
		
		 $s = file_get_contents('hashstore');
		 if ( isset($s) ) {
 		 	self::$hash = unserialize($s);
 		 } 
 		 $this->removeOldHashItems();
	}

	static function getInstance() {
		if (self::$instance == NULL) {
			self::$instance = new TokenHash();
		}
		return self::$instance;
	}
	
	function AddToken($customerID,$token, $cartID) {
		$now = time();
		self::$hash[] = Array($token, $customerID, $cartID, $now);
		
		//serialize data
		$s = serialize(self::$hash);
		file_put_contents('store', $s);
	}
	
	function removeToken($token) {

		foreach (self::$hash as $id => $storedValues ) { 
			$storedToken = $storedValues[0]; 
			if ( $token == $storedToken ) {
				unset(self::$hash[$id]);
				$s = serialize(self::$hash);
				file_put_contents('store', $s);

			} 
		}
	}
	
	function getCustomerID($token) {
		foreach (self::$hash as $id => $storedValues ) { 
			$storedToken = $storedValues[0]; 
			if ( $token == $storedToken ) {
				return $storedValues[1];
			}
		}
		return 0;
	}
	
	function getCartID($token) {
		foreach (self::$hash as $id => $storedValues ) { 
			$storedToken = $storedValues[0]; 
			if ( $token == $storedToken ) {
				return $storedValues[2];
			} 
		}
		return 0;
	}
	
	function removeOldHashItems() {
		$aWeekAgo = time() - (7 * 24 * 60 * 60); 
		foreach (self::$hash as $item) {
			$hashTime = $item[3]; 
			 if ($hashTime < $aWeekAgo) {
			 	$this->removeToken($item[0]);
			 } 

		}
		
	}
	
	static private $instance = null;
	static private $hash = Array();
}
