<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	</head>

	<body>
		<div id='header' data-role='header'>
				<img src="../images/ZenithBank.jpg" style="width: 20%;">
			</div>
		<br/>
		<br/>
		<br/>
		<div id="content">
			<?php
			session_start();
			$phone = $_SESSION['phone'];

			$obtained = $_POST['utility'];
			$amount = $_POST['txtUtilAmt'];
			$charge = 0.05;

			$dbc = mysql_connect("localhost", "heart", "F0undAti0n#1");
			mysql_select_db("db_heart_foundation");

			$query = mysql_query("SELECT * FROM account WHERE phoneNumber = $phone ");
			while ($row = mysql_fetch_array($query)) {
				$ecode = $row['electricityCode'];
				$wcode = $row['waterCode'];
				$senderAccountNumber = $row['accountNumber'];
				//$paymentAccount = $row[''];
				$availableBalance = $row['abalance'];
				$currentBalance = $row['cbalance'];
				$name = $row['name'];
			}
			if ($obtained == 'electricity') {
				if ($amount < $currentBalance)
					electricity($amount, $availableBalance, $currentBalance, $ecode, $senderAccountNumber, $name);
				else {
					print "<p> You do not have enough balance in your account to make this transaction </p>";
					print "<p> Your balance is " . $currentBalance . "</p>";
				}
			} elseif ($obtained == 'water') {
				if ($amount < $currentBalance)
					water($amount, $availableBalance, $currentBalance, $wcode, $senderAccountNumber, $name);
				else {
					print "<p> You do not have enough balance in your account to make this transaction </p>";
					print "<p> Your balance is " . $currentBalance . "</p>";
				}
			} elseif ($obtained == 'phoneCredits') {

			} else {
				print "<p>You did not select any utility</p>";
			}

			function electricity($amount, $availableBalance, $currentBalance, $ecode, $senderAccountNumber, $name) {
				$availableBalance = $availableBalance - $amount;
				$currentBalance = $currentBalance - $amount - $charge;
				mysql_query("UPDATE test.account SET cbalance = $currentBalance,abalance = $availableBalance WHERE account.accountNumber = $senderAccountNumber");
				$insert = mysql_query("INSERT INTO test.electricity (name,accountNumber,amount,code) VALUES ('$name','$senderAccountNumber','$amount','$ecode')");
				print "<p style='color:skyblue; font-size:20px;'>Your remaining balance is " . $currentBalance . "</p>";
				print "<p style='color:skyblue; font-size:15px;'>You paid " . $amount . " for Electricity Bill </p>";
			}

			function water($amount, $availableBalance, $currentBalance, $wcode, $senderAccountNumber, $name) {
				$availableBalance = $availableBalance - $amount;
				$currentBalance = $currentBalance - $amount - $charge;
				mysql_query("UPDATE test.account SET cbalance = $currentBalance,abalance = $availableBalance WHERE account.accountNumber = $senderAccountNumber");
				mysql_query("INSERT INTO test.water (name,accountNumber,amount,code) VALUES ('$name','$senderAccountNumber','$amount','$wcode')");
				print "<p>Your remaining balance is " . $currentBalance . "</p>";
				print "<p>You paid " . $amount . " for Water Bill </p>";
			}
			?>
			<br />
			<br />
			<a href="homepage.php" rel="external">
			<input  data-icon="back" data-rel="back" title="Go back"  type="button" value="HOME" data-theme="d">
			</a>
			<!-- <a href="#" data-icon="back" data-rel="back" title="Go back" style="background:skyblue;color:white; padding: 8px; border-radius: 7px;box-shadow: 2px 2px 2px 2px black;">HOME</a> -->
		</div>
	</body>
</html>

<?php ?>