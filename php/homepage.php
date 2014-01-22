<?php
session_start();
?>
<!DOCTYPE html>

<html>
	<title>MOBILE BANKER</title>
	<head>

		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/jquery.mobile-1.2.0.min.css" />
		<script src="../js/jquery-1.8.2.min.js"></script>
		<script src="../js/jquery.mobile-1.2.0.min.js"></script>

		<link rel="stylesheet" href="../themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="../jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="../scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="../jquery.nivo.slider.js"></script>

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header'>
				<img src="../images/ZenithBank.jpg" style="width: 20%;">
			</div>
			<br/>
			<br/>
			<br/>

			<div id='content' data-role='content'>

				<!-- IMAGE SLIDER -->
				<div id="wrapper">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider" style="height: auto;">
							<!-- <img src="../images/1.png" data-thumb="images/1.JPG" alt="" title="" style="width: 450px;height:200%; visibility: hidden; display: inline; max-height: 300px;"/> -->
							<img src="../images/2.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="../images/2.gif" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="../images/3.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="../images/4.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="../images/5.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="../images/6.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
						</div>
					</div>
				</div>
				<!-- END OF IMAGE SLIDER -->

				<!-- OPTION BUTTONS -->
				<div class="btnHeads" id="btnBalance">
					<img src="../images/accountbalance.png" alt="Account Balance" style="width: 20px; height: 20px" /> &nbsp;
					Account Balance
				</div>
				<div id="dropBal" style=" display: none; padding: 0px;padding-left:0px; color:rgb(2,130,199); font-family:'Times New Roman', Times, serif;
				font-weight: bolder;font-size: smaller; border: 1px solid rgb(197,199,199);border-radius: 3px;">
					<?php
					session_start();
					$phone = $_SESSION['phone'];

					// $con = mysql_connect("localhost", "heart", "F0undAti0n#1");
					// mysql_select_db("db_heart_foundation");

					$con = mysql_connect("localhost", "root", "");
					mysql_select_db("test");

					$query = "SELECT cbalance,abalance FROM account where phoneNumber='$phone'";
					$result = mysql_query($query);
					echo "<table padding='10px'>";

					while ($row = mysql_fetch_array($result)) {
						echo "<tr><th>Available Balance:</th><td>" . $row['abalance'] . "</td></tr>";
						echo "<tr><th>Current Balance:</th><td>" . $row['cbalance'] . "</td></tr>";
					}
					echo "</table>";

					mysql_close($con);
					?>
				</div>

				<div id="req" class="btnHeads">
					<img src="../images/request.png" alt="Account Balance" style="width: 20px; height: 20px" /> &nbsp;
					Requests
				</div>
				<div id="dropReq" style="display: none; padding: 5px;margin: 5px; margin-top: 0px;border-radius: 3px;">
					<div id="btnCheckbook" class='btnSub' style="padding-left:0px; text-align: center;">
						Check Book
					</div>
					<div id="drpChkBk" style="display: none;">
						<div id="btnNewCheckbook" class='btnSubBtn'>
							NEW
						</div>

						<div id="btnBlockCheckbook" class='btnSubBtn'>
							BLOCK
						</div>
						<div id="btnCloseCheckbook" class='btnCancel'>
							CLOSE
						</div>
					</div>
					<div id="btnACard" class='btnSub' style="padding-left:0px; text-align: center;">
						ATM Card
					</div>
					<div id="drpACard" style="display: none;">
						<div id="btnNewACard" class='btnSubBtn'>
							NEW
						</div>
						<div id="btnBlockACard" class='btnSubBtn'>
							BLOCK
						</div>
						<div id="btnCloseACard" class='btnCancel'>
							CLOSE
						</div>
					</div>
				</div>

				<!-- NEW CHECK BOOK DIV -->
				<div id='ctnNewChkBk' style="display: none; text-align: center; margin: 10px; margin-bottom: 40px;">
					<div id="lblLogon" style="text-align: center;" >
						<span style="margin-left:40px">CHECK BOOK REQUEST</span>
					</div>

					<label for='txtLeafNum' style="font-size: 15px; font-weight: bold;font-size: smaller;">NUMBER OF LEAVES</label>
					<input type="text" name="txtLeafNum" size='5px' id="txtLeafNum"/>

					<div id="chkrequest" class="btnLogon">
						SEND
					</div>
					<div id="btnCloseNewChkbk" class='btnCancel'>
						CLOSE
					</div>
				</div>
				<!-- END OF NEW CHECK BOOK DIV -->

				<!-- BLOCK CHECK BOOK DIV -->
				<div id='ctnBlockChkBk' style="display: none; text-align: center; margin: 10px; margin-bottom: 40px;">
					<div id="lblLogon" style="text-align: center;" >
						<span style="margin-left:40px">CONFIRM CHECK CANCELLATION</span>
					</div>

					<label for='txtCheckNum' style="font-size: 15px; font-weight: bold;font-size: smaller;">CHECK NUMBER</label>
					<input type="text" name="txtCheckNum" size='5px' id="txtCheckNum"/>

					<div id="chkblock" class="btnLogon">
						BLOCK
					</div>
					<div id="btnCloseBlockChkbk" class='btnCancel'>
						CLOSE
					</div>
				</div>
				<!-- END OF BLOCK CHECK BOOK DIV -->

				<!-- NEW ATM DIV -->
				<div id='ctnNewATM' style="display: none; text-align: center; margin: 10px; margin-bottom: 40px;">
					<div id="lblLogon" style="text-align: center;" >
						<span style="margin-left:40px">ATM REQUEST</span>
					</div>

					<label for='txtATMNum' style="font-size: 15px; font-weight: bold;font-size: smaller;">CARD NUMBER</label>
					<input type="text" name="txtATMNum" size='5px' id="txtATMNum"/>

					<div id="ATMrequest" class="btnLogon">
						SEND
					</div>
					<div id="btnCloseNewATM" class='btnCancel'>
						CLOSE
					</div>
				</div>
				<!-- END OF NEW ATM DIV -->

				<!-- BLOCK ATM DIV -->
				<div id='ctnBlockATM' style="display: none; text-align: center; margin: 10px; margin-bottom: 40px;">
					<div id="lblLogon" style="text-align: center;" >
						<span style="margin-left:40px">CONFIRM ATM CANCELLATION</span>
					</div>

					<label for='txtATMNum' style="font-size: 15px; font-weight: bold;font-size: smaller;">CARD NUMBER</label>
					<input type="text" name="txtATMNum" size='5px' id="txtATMNum"/>

					<div id="ATMblock" class="btnLogon">
						BLOCK
					</div>
					<div id="btnCloseBlockATM" class='btnCancel'>
						CLOSE
					</div>
				</div>
				<!-- END OF BLOCK ATM DIV -->

				<div id="btntrans" class="btnHeads">
					<img src="../images/transfer.png" alt="Account Balance" style="width: 20px; height: 20px" />&nbsp;
					Fund Transfer
				</div>
				<!-- utillity option -->
				<div class="btnHeads" id="btnUtil">
					<img src="../images/utilities.png" alt="Account Balance" style="width: 20px; height: 20px" /> &nbsp;
					Utility
				</div>
				<div id="dropUtil" style="display: none; padding: 5px; border: 1px solid rgb(197,199,199);margin: 5px; margin-top: 0px;border-radius: 3px;">

					<form action='utilities.php' method='post'>
						<fieldset data-role="controlgroup">
							<input type="radio" name="utility" id="radio-choice-v-2a" class="utilradio" value="electricity" checked="checked">
							<label for="radio-choice-v-2a">ELECTRICITY</label>
							<input type="radio" name="utility" id="radio-choice-v-2b" class="utilradio" value="water">
							<label for="radio-choice-v-2b">WATER</label>
							<input type="radio" name="utility" id="radio-choice-v-2c" class="utilradio" value="phoneCredits">
							<label for="radio-choice-v-2c">PHONE CREDIT</label>
						</fieldset>
						<input name="txtUtilAmt" id="txtUtilAmt" type="text" placeholder="amount">

						<input name="btnpurchase" id="btnpurchase" type="submit" value="Purchase" data-theme="a">

					</form>
				</div>
				<!-- END OF UTITLITY OPTION -->

				<a href="../mainpage.php" rel="external">
				<input  data-icon="back" data-rel="back" title="Go back"  type="button" value="LOG OUT" data-theme="d">
				</a>
			</div>
			<!-- END OF OPTION BUTTONS -->
			<p>
				<div style="background: url('../images/Zenith-Bank.jpg');height: 100px;background-size: 80%;background-repeat:no-repeat; width:200px; "></div>
				<div  style='text-align:left; font-family: Arial, Helvetica, sans-serif;font-size: 10px; '>

					&copy; 2013 Zenith Bank. Copyright 2013 Zenith Bank.
					<br />
					Zenith Bank All rights reserved
					Zenith Bank Group authorized financial services and registered credit provider.

				</div>
			</p>
		</div>
		<div id="lower">
			<p id="exTerm" style="border: 2px solid silver; opacity: .95; padding: 15px;background: #ff0d01;
			background-repeat: no-repeat; font-family: Arial, Helvetica, sans-serif;font-size: 10px;
			background-size: 300%; color: white; display: none;">
				As the Corporate Social Responsibility arm of the Zenith Bank, Zenith Bank Foundation is committed to the
				socio-economic betterment of the communities in which the bank operates,
				focusing on development in the areas of Environment, Education, Economic Empowerment and Special Projects.
			</p>
			<p id="exAbout" style="border: 2px solid silver; opacity: .95; padding: 15px;background: #ff0d01;
			background-repeat: no-repeat;font-family: Arial, Helvetica, sans-serif;font-size: 10px;
			background-size: 300%; color: white; display: none;">
				The Zenith Bank mobile banker application is meant to provide clients of Zenith Bank with most of the basic services offered by the bank
				through hand held devices. This service is provided by Zenith Bank and powered by NALO SOLUTIONS.
			</p>
			<div id='footer' data-role='footer'>
				<div style="margin: 0px auto; padding-top:10px; font-size: small; ">
					<span  id='terms' style="width: 50%; height: 100%;margin-right: 5px;padding: 13px;cursor: pointer; font-size: 5px;" ><img src="../images/terms.png" alt="Terms" style="width: 20px; height: 15px" /> </span><span id='about' style="margin-left:5px; width: 50%; height: 100%;padding:13px; cursor: pointer;" ><img src="../images/about.png" alt="About" style="width: 20px; height: 15px" /></span>
				</div>

			</div>
		</div>

		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {
		// IMAGE SLIDER
		$('#slider').nivoSlider();

		// TRANSACTION OPTION
		$('#transaction').click(function() {
			$('#dropTrans').slideToggle();
		})
		// CARRYOUT TRANSACTION
		$('#btntrans').click(function() {
			window.location = "transfer.php";
		})
		// CHECK USERS BALANCE
		$('#btnBalance').click(function() {
			// window.location = "balance.php"
			$('#dropBal').slideToggle();
			//$('#dropBal').html('You available balance is GHc.....p <br/>Your current balance is GHc.....p <br/>');
			/*$.get("php/balance.php", function(data) {
			 if (data == '1') {
			 $('#dropBal').slideToggle();
			 $('#dropBal').html(data);
			 } else {
			 $('#dropBal').slideToggle();
			 $('#dropBal').html('PLEASE LOG IN TO VIEW BALANCE DETAILS');
			 }
			 });*/

		})
		// REQUEST FOR ITEMS
		$('#req').click(function() {
			$('#dropReq').slideToggle();
		})
		//CHECK BOOK OPTION
		$('#btnCheckbook').click(function() {
			$('#drpChkBk').slideToggle();
			$('#drpACard').slideUp();
		})
		//NEW CHECK BOOK OPTION
		$('#btnNewCheckbook').click(function() {
			$('#drpChkBk').slideUp();
			$('#dropReq').slideUp();
			$('#ctnNewChkBk').slideDown();
		})
		//CLOSE NEW CHECK BOOK OPTION
		$('#btnCloseNewChkbk').click(function() {
			$('#ctnNewChkBk').slideUp();
			$('#dropReq').slideDown();
		})
		//Block CHECK BOOK OPTION
		$('#btnBlockCheckbook').click(function() {
			$('#drpChkBk').slideUp();
			$('#dropReq').slideUp();
			$('#ctnBlockChkBk').slideDown();
		})
		//CLOSE BLOCK CHECK BOOK OPTION
		$('#btnCloseBlockChkbk').click(function() {
			$('#ctnBlockChkBk').slideUp();
			$('#dropReq').slideDown();
		})
		//CLOSE CHECK BOOK
		$('#btnCloseCheckbook').click(function() {
			$('#drpChkBk').slideToggle();
			$('#drpACard').slideUp();
		})
		// ......................................................................................................................................
		//ATM CARD OPTION
		$('#btnACard').click(function() {
			$('#drpACard').slideToggle();
			$('#drpChkBk').slideUp();
		})
		//CLOSE ATM CARD
		$('#btnCloseACard').click(function() {
			$('#drpACard').slideToggle();
			$('#drpACard').slideUp();
		})
		//NEW ATM OPTION
		$('#btnNewACard').click(function() {
			$('#drpACard').slideUp();
			$('#dropReq').slideUp();
			$('#ctnNewATM').slideDown();
		})
		//CLOSE NEW ATM OPTION
		$('#btnCloseNewATM').click(function() {
			$('#ctnNewATM').slideUp();
			$('#dropReq').slideDown();
		})
		//Block ATM OPTION
		$('#btnBlockACard').click(function() {
			$('#drpACard').slideUp();
			$('#dropReq').slideUp();
			$('#ctnBlockATM').slideDown();
		})
		//CLOSE BLOCK ATM OPTION
		$('#btnCloseBlockATM').click(function() {
			$('#ctnBlockATM').slideUp();
			$('#dropReq').slideDown();
		})
		// utility
		$('#btnUtil').click(function() {
			$('#dropUtil').slideToggle();
		})
		//TERMS AND CONDITION
		$('#terms').click(function() {
			$('#exAbout').hide();
			$('#exTerm').slideToggle();
		});
		// ABOUT APPLICATION
		$('#about').click(function() {
			$('#exTerm').hide();
			$('#exAbout').slideToggle();
		});
		// UTILITY PURCHASE
		// $('#btnpurchase').click(function() {
		// $.post("php/utilities.php", {
		// utility : $("#checkboxReq").val(),
		// amount : $("#txtUtilAmt").val()
		// }, function(data) {
		// alert(phone);
		// });
		// });
	}); 
</script>
