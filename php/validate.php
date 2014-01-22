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
			<div id='heade'>
				<!-- data-role='header' -->
			</div>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<?php
session_start();
$phoneNum = $_POST['phone'];
$pin = $_POST['pin'];

if (isset($_SESSION['phone'])) {
session_destroy();
				?>
				<script>
					window.location = '../mainpage.php';
				</script>
				<?php
				session_start();
				$phoneNum = $_POST['phone'];
				$pin = $_POST['pin'];
				}else{
				try {
				$dbcon = mysql_connect("localhost", "heart","F0undAti0n#1");
				mysql_select_db("db_heart_foundation");
				
				// $dbcon = mysql_connect("localhost", "root","");
				// mysql_select_db("test");
				
				$query = "select * from account where phoneNumber='" . $phoneNum . "' and pin='" . $pin . "'";
				$result = mysql_query($query, $dbcon);
				$num = mysql_num_rows($result);
				if ($num < 1) {
				echo "<P>INVALID USER DETAILS</P><br /><a href='../mainpage.php' rel='external'>
				<input  data-icon='back' data-rel='back' title='Go back'  type='button' value='RETRY' data-theme='b'>
				</a>";
				} else {
				$_SESSION['phone'] = $phoneNum;
				?>
				<!-- // $_SESSION['authToken'] = rand(10e16, 10e20); -->

				<!-- //echo '<a href="homepage.php"></a>'; -->
				<!-- header("Location: homepage.php"); -->
				<script>
					window.location = 'homepage.php';
				</script>
				<?php
				}
				} catch (PDOException $e) {
				#$log->writeError($e->getMessage());
				}}
				?>
			</div>
			<!-- <div id='footer' data-role='footer'>
			Powered by NALO Solutions
			</div> -->
		</div>

	</body>

</html>
<!-- if(isset($_SESSION['views'])) -->