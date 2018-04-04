<?php
		include_once("functions.php");
		$api = 'API';
		$transId = $_POST['transId'];
		$result = verify($api,$transId);
		$result = json_decode($result);
		print_r($result);

?>