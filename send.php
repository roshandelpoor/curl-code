<?php
		include_once("functions.php");
		$api = 'API';
		$amount = '1000';
		$redirect = 'Callback';
		$factorNumber = 123;
		$result = send($api,$amount,$redirect,$factorNumber);
		$result = json_decode($result);
		if($result->status) {
			$go = "https://pay.ir/payment/gateway/$result->transId";
			header("Location: $go");
		} else {
			echo $result->errorMessage;
		}
?>