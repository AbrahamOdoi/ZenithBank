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
				<img src="../images/ZenithBank.jpg" style="width: 20%;">
			</div>
			<br/>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<div id='ctnLogon'>
					<div id="lblLogon">
						Fund Transfer
					</div>

					<form id="frmTransfer" action="transaction.php" method="post">
						<table>
							<tr>
								<td><label for='txtReceiverAcc' style="font-size: 15px; font-weight: bold;font-size: smaller;">Account number</label>
								<input type="text" name="txtReceiverNum"  id="txtReceiverAcc"/>
								</td>
							</tr>
							<!-- <tr>
							<td><label for='txtReceiverName' style="font-size: 15px;font-weight: bold;font-size: smaller;">Name of account holder</label>
							<input type="text" name="txtReceiverName"  id="txtReceiverName"/>
							</td>
							</tr>
							<tr>
							<td><label for='txtReceiverNum' style="font-size: 15px;font-weight: bold;font-size: smaller;">Holders number</label>
							<input type="text" name="txtReceiverNum"  id="txtReceiverNum"/>
							</td>
							</tr> -->
							<tr>
								<td><label for='txtTransferAmt' style="font-size: 15px;font-weight: bold;font-size: smaller;">Amount in figures</label>
								<input type="text" name="txtTransferAmt"  id="txtTransferAmt"/>
								</td>
							</tr>
							<tr>
								<td><label for='txtsenderPin' style="font-size: 15px;font-weight: bold;font-size: smaller;">PIN</label>
								<input type="password" name="txtsenderPin" maxlength="4" id="txtsenderPin"/>
								</td>
							</tr>
							<tr>
								<td>
								<p>
									Upon clicking the transfer button the above stated amount will be transfered to the stated account number.
								</p>
								<input type="submit" name="btnTransfer" value="Transfer" id="btnTransfer" data-theme="a" />
								</td>
							</tr>
						</table>
					</form>

					<a href="homepage.php" rel="external">
					<input  data-icon="back" data-rel="back" title="Go back"  type="button" value="HOME" data-theme="d">
					</a>
					<!-- <a href="homepage.php" data-icon="back" data-rel="back" title="Go back" style="background:skyblue;color:white; padding: 8px; border-radius: 7px;box-shadow: 2px 2px 2px 2px black;">HOME</a> -->

				</div>

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
		$('#terms').click(function() {
			$('#exAbout').hide();
			$('#exTerm').slideToggle();
		});

		$('#about').click(function() {
			$('#exTerm').hide();
			$('#exAbout').slideToggle();
		});

		$('#btnTransfer').click(function() {
			var accnum = $('#txtReceiverAcc').val();
			var name = $('#txtReceiverName').val();
			var phone = $('#txtReceiverNum').val();
			var amt = $('#txtTransferAmt').val();
			var currency = $('#txtTransferCurrency').val();
			if (accnum == '') {
				$('#txtReceiverAcc').css('background', 'pink');
			} else if (name == '') {
				$('#txtReceiverName').css('background', 'pink');
			} else if (phone == '') {
				$('#txtReceiverNum').css('background', 'pink');
			} else if (amt == '') {
				$('#txtTransferAmt').css('background', 'pink');
			} else if (currency == '') {
				$('#txtTransferAmt').css('background', 'pink');
			}
		});

	}); 
</script>
<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
