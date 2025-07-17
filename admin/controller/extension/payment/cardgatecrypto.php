<?php 

include 'cardgate/cardgate.php';

class ControllerExtensionPaymentCardGateCrypto extends ControllerExtensionPaymentCardGatePlusGeneric {
	public function index() {
		$this->_index('cardgatecrypto');
	}

	public function validate() {
		return $this->_validate('cardgatecrypto');
	}
}
?>