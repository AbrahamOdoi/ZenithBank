<!DOCTYPE html>

<html>
	<title>MOBILE BANKER</title>
	<head>

		<!-- <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" /> -->

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.2.0.min.js"></script>

		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="jquery.nivo.slider.js"></script>

	</head>
	<body>
		<div id='page' data-role='page'>
			<div id='header' data-role='header'>
				<img src="images/ZenithBank.jpg" style="width: 20%;">
			</div>
			<br/>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<div id='ctnLogon'>
					<div id="lblLogon" >
						SECURED ACCESS LOGON <!-- <span style="margin-left:40px">SECURED ACCESS LOGON</span> -->
					</div>

					<!-- LOGIN FORM -->
					<form id="frmLogon" action="php/validate.php" method="POST">
						<table>
							<tr>
								<td><label for='txtPhonenum' style="font-size: 15px; font-weight: bold;font-size: smaller;">Phone number</label>
								<input type="text" name="phone" size='50px' id="txtPhonenum" style="z-index: 9999"/>
								</td>
								<td><label for='txtPin' style="font-size: 15px;font-weight: bold;font-size: smaller;">PIN</label>
								<input name="pin" id="txtPin" type="password" value="" data-clear-btn="true">
								</td>
							</tr>
							<tr>
								<td colspan="2"><!-- <div id="requests" class="btnLogon"> -->
								<input type="submit" name="btnLogon" value="Logon" id="btnLogon" data-theme="a" />
								<!-- </div><!--  -->
								<p>
									It is your responsibility to ensure the secrecy of your PIN number.
								</p></td>
							</tr>
						</table>
					</form>
					<!-- END OF LOGIN FORM -->
				</div>
				<!-- IMAGE SLIDER -->
				<div id="wrapper">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider" style="height: auto;">
							<!-- <img src="images/1.png" data-thumb="images/1.JPG" alt="" title="" style="width: 450px;height:200%; visibility: hidden; display: inline; max-height: 300px;"/> -->
							<img src="images/2.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="images/2.gif" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="images/3.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="images/4.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="images/5.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
							<img src="images/6.jpg" data-thumb="images/UTBank.jpg" alt="" data-transition="slideInLeft" style="width: 450px;visibility: hidden; display: inline; max-height: 300px;"/>
						</div>
					</div>
				</div>
				<!-- END OF IMAGE SLIDER -->
				<!-- OPTION BUTTONS -->
				<div id="calculator" class="btnHeads">
					<img src="images/calculator.png" alt="Calculator" style="width: 15px; height: 20px" /> &nbsp;
					Calculators
				</div>
				<div id="dropCalc" style="display: none; padding: 5px; border: 1px solid rgb(197,199,199);margin: 5px; margin-top: 0px;border-radius: 3px;">
					<a href="">
					<div id="btnInvestment" class='btnSub'>
						Lump sum investment
					</div></a>
					<p/>
					<a href="">
					<div id="btnLoan" class='btnSub'>
						Home loan repayment
					</div></a>
					<p/>
					<a href="">
					<div id="btnSaving" class='btnSub'>
						Saving for a goal
					</div></a>
					<p/>
					<a href="">
					<div id="btnFinance" class='btnSub'>
						Car finance
					</div></a>
				</div>
				<div id="btnBranchLoc" class="btnHeads">
					<img src="images/locator.png" alt="Account Balance" style="width: 17px; height: 20px" /> &nbsp;
					Branch Locator
				</div>
				<div id="dropBranchLoc" style=" display:none; padding: 5px;color:rgb(2,130,199); font-family:'Times New Roman', Times, serif;
				font-weight: bold;font-size: smaller; border: 1px solid rgb(197,199,199);border-radius: 3px;">
					<br />
					<ul data-role="listview" data-inset="true" data-filter-placeholder="Search Branch" data-filter="true">
						<li data-role="list-divider">
							OSU BRANCH <span class="ui-li-count">1</span>
						</li>
						<li>
							<h2>Oxford Street behind KFC building, OSU</h2>
							<p>
								<strong>Tel: 0249430715  / 0244000000</strong>
							</p>
						</li>
						<li data-role="list-divider">
							DANSOMAN BRANCH<span class="ui-li-count">2</span>
						</li>
						<li>
							<h2>last stop Junction, DANSOMAN</h2>
							<p>
								<strong>Tel: 0249430715 / 0244000000</strong>
							</p>
							<p>

							</p>
						</li>
						<li data-role="list-divider">
							LEGON BRANCH<span class="ui-li-count">3</span>
						</li>
						<li>
							<h2>University of Ghana campus, LEGON</h2>
							<p>
								<strong>Tel: 0249430715 / 0244000000</strong>
							</p>
						</li>
						<li data-role="list-divider">
							TEMA BRANCH<span class="ui-li-count">4</span>
						</li>
						<li>
							<h2>Coka cola round about, TEMA</h2>
							<p>
								<strong>Tel: 0249430715 / 0244000000</strong>
							</p>
						</li>
						<li data-role="list-divider">
							MADINA BRANCH<span class="ui-li-count">5</span>
						</li>
						<li>
							<h2>Dreams avenue junction, MADINA</h2>
							<p>
								<strong>Tel: 0249430715 / 0244000000</strong>
							</p>
						</li>

				</div>

				<p>
					<div style="background: url('images/Zenith-Bank.jpg');height: 100px;background-size: 80%;background-repeat:no-repeat; width:200px; "></div>
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
				background-size: 300%; color: white; display: none; ">
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
						<span  id='terms' style="width: 50%; height: 100%;margin-right: 5px;padding: 13px;cursor: pointer; font-size: 5px;" ><img src="images/terms.png" alt="Terms" style="width: 20px; height: 15px" /> </span><span id='about' style="margin-left:5px; width: 50%; height: 100%;padding:13px; cursor: pointer;" ><img src="images/about.png" alt="About" style="width: 20px; height: 15px" /></span>
					</div>

				</div>
			</div>

		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {

		$('#slider').nivoSlider();

		// BRANCH LOCATOR
		$('#btnBranchLoc').click(function() {
			$('#dropBranchLoc').slideToggle();
		})
		// calculator
		$('#calculator').click(function() {
			$('#dropCalc').slideToggle();
		})
		// terms and conditions
		$('#terms').click(function() {
			$('#exAbout').hide();
			$('#exTerm').slideToggle();
		});
		// about application
		$('#about').click(function() {
			$('#exTerm').hide();
			$('#exAbout').slideToggle();
		});

		/* // LOGON ATTEMP VALIDATION
		 $('.btnLogon').click(function() {
		 window.location = 'php/homepage.php';
		 // $.post("php/validate.php", {
		 // phone : $("#txtPhonenum").val(),
		 // pin : $("#txtPin").val()
		 // }, function(data) {
		 // alert(phone);
		 // });
		 });*/

	}); 
</script>
