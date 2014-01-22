<!DOCTYPE html>
<html>
	<title>MOBILE BANKER</title>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header'>
				<img src="../images/UTBank.png" style="width: 30%;">
			</div>
			<br/>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<?php
				session_start();
				error_reporting(E_ERROR | E_PARSE);
				$phone = $_SESSION['phone'];
				$charge = 0.05;
				$raccountNumber = $_POST['txtReceiverNum'];
				$amount = $_POST['txtTransferAmt'];
				$senderPin = $_POST['txtsenderPin'];

				try {
					$con = mysql_connect("localhost", "heart","F0undAti0n#1");
				mysql_select_db("db_heart_foundation");
					$query = "SELECT * FROM account WHERE pin = '$senderPin' and phoneNumber = '$phone'";
					$exec = mysql_query($query,$con);
					if ($exec) {
						while ($exec_row = mysql_fetch_assoc($exec)) {
							$accountNumber = $exec_row['accountNumber'];
							$availableBalance = $exec_row['abalance'];
							$currentBalance = $exec_row['cbalance'];
							if ($amount > $currentBalance) {
								echo 'Your balance is lower than the amount you want to send <br/>';
								echo 'Your balance is' . $currentBalance;
							} else {
								$availableBalance = $availableBalance - $amount;
								$currentBalance = $currentBalance - $amount - 0.05;
								 $availableBalance . "<br/>";
								$sqll = "UPDATE account SET cbalance = $currentBalance,abalance = $availableBalance WHERE account.accountNumber = $accountNumber";
								$exec = mysql_query($sqll);
								addAmount($amount, $raccountNumber);
							echo "<p>The transfer was successful, your current balance is $currentBalance </p>";




				?>
				<br/>
				<!-- <a href="homepage.php" data-icon="back" data-rel="back" title="Go back" style="background:skyblue;color:white; padding: 8px; border-radius: 7px;box-shadow: 2px 2px 2px 2px black;">HOME</a> -->
				<!-- <a href="homepage.php" rel="external">
				<input  data-icon="back" data-rel="back" title="Go back"  type="button" value="LOG OUT" data-theme="b">
				</a> -->

				<?php
				}
				}
				} else {
				echo "no exec" . mysql_error();
				}
				} catch (PDOException $e) {
				$e -> getMessage();
				}

				function addAmount($amount, $raccountNumber) {

				try {

				$rcon = mysql_connect("localhost","heart","F0undAti0n#1");
				mysql_select_db("db_heart_foundation");

				$rsql = "SELECT * FROM account WHERE accountNumber = $raccountNumber";
				$rexec = mysql_query($rsql,$rsql);
				if ($rexec) {
				while ($rexec_row = mysql_fetch_assoc($rexec)) {
				$ravailableBalance = $rexec_row['abalance'] + $amount;
				$rcurrentBalance = $rexec_row['cbalance'] + $amount;
				$ravailableBalance . "<br/>";
				$rsqll = "UPDATE account SET cbalance = $rcurrentBalance,abalance = $ravailableBalance WHERE account.accountNumber = $raccountNumber";
				$rexec = mysql_query($rcon, $rsqll);
				}
				}
				} catch (PDOException $e) {
				$e -> getMessage();
				}
				}
				?>
			</div>
			<br />
			<a href="homepage.php" rel="external">
			<input  data-icon="back" data-rel="back" title="Go back"  type="button" value="HOME" data-theme="d">
			</a>
			

	</body>

</html>

<script type="
text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
