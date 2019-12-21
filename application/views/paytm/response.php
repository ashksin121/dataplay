<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<?php if($isValidChecksum == "TRUE") {
		echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
		if ($_POST["STATUS"] == "TXN_SUCCESS") {
			echo "<b>Transaction status is success</b>" . "<br/>";
			//Process your transaction here as success transaction.
			//Verify amount & order id received from Payment gateway with your application's order id and amount.
		}
		else {
			echo "<b>Transaction status is failure</b>" . "<br/>";
		}

		if (isset($_POST) && count($_POST)>0 )
		{ 
			foreach($_POST as $paramName => $paramValue) {
					echo "<br/>" . $paramName . " = " . $paramValue;
			}
		}
		

	}
	else {
		echo "<b>Checksum mismatched.</b>";
		//Process transaction as suspicious.
	} ?>
</body>
</html>