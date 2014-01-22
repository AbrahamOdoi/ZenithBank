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
				echo $_SESSION['phone'];
					// $con = mysql_connect("localhost", "root", "");
					// mysql_select_db('test');
					//
					// $query=''
					// $result = mysql_query($con, "SELECT cbalance,abalance FROM account limit 1");
					//
					// echo "
					// <table border='1'>
					//
					// <tr>
					// <th>Available Balance</th>
					// <th>Current Balance</th>
					//
					// </tr>";
					// //
					// // while ($row = mysqli_fetch_array($result)) {
					// // echo "
					// <tr>
					// ";
					// // echo "<td>" . $row['abalance'] . "</td>";
					// // echo "<td>" . $row['cbalance'] . "</td>";
					// // echo "
					// </tr>
				// ";
					// // }
					// // echo "
				// </table>";
				// //
				// // mysqli_close($con);



				?>
			</div>
			<div id='footer'>
				Powered by NALO Solutions
			</div>
		</div>

	</body>

</html>