<!DOCTYPE html>
<html>
	<title>MOBILE BANKER</title>
	<head>
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header'>
				<!-- data-role='header' -->
			</div>
			<br/>
			<br/>
			<div id='content' data-role='content'>

				<?php
				session_start();
				$phone = $_SESSION['phone'];

				$con = mysql_connect("localhost", "heart","F0undAti0n#1");
				mysql_select_db("db_heart_foundation");

				$query = "SELECT cbalance,abalance FROM account where phoneNumber='$phone'";
				$result = mysql_query($query);
				echo "<table border='1'>
					<tr>
						<th>Available Balance</th>
						<th>Current Balance</th>
					</tr>";

				while ($row = mysqli_fetch_array($result)) {
					echo "<tr><td>";
					echo $row['abalance'];
					echo "</td><td>";
					echo $row['cbalance'];
					echo "</td></tr>";
				}
				echo "</table>";
				
				mysql_close($con);
				?>
			</div>
			<div id='footer'>
				Powered by NALO Solutions
			</div>
		</div>

	</body>

</html>