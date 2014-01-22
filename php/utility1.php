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
				$user=$_SESSION['user'];
				echo $utility = $_POST['utility'];
				echo $amount = $_POST['amount'];
				echo "yes";

				try {
						$dbcon = mysql_connect("localhost", "heart","F0undAti0n#1");
				mysql_select_db("db_heart_foundation");

						$query = "insert into tbl_utility utilities values('".$user."','".$utility."','".$amount."') ";
						if (mysql_query($query, $dbcon)) {
							echo "1";
						} else {
							echo "0";							
						}
					} catch(PDOException $e) {
						#$log->writeError($e->getMessage());
					}
				?>
			</div>
			<div id='footer'>
				Powered by NALO Solutions
			</div>
		</div>

	</body>

</html>
<!-- if(isset($_SESSION['views'])) -->