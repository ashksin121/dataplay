<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./application/libraries/lib/config_paytm.php");
require_once("./application/libraries/lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = "712";
$CUST_ID = "abc";
$INDUSTRY_TYPE_ID = "RETAIL";
$CHANNEL_ID = "WEB";
$TXN_AMOUNT = "1000";

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;


$paramList["CALLBACK_URL"] = "http://localhost/dataplay/pgResponse.php";
$paramList["MSISDN"] = 7777777777; //Mobile number of customer
$paramList["EMAIL"] = "ashksin121@gmail.com"; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //



//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<button name="submit" type="submit">Submit</button>
		<!-- <script type="text/javascript">
			document.f1.submit();
		</script> -->
	</form>
</body>
</html>