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
			<div id='header'>
				<!-- data-role='header' -->
			</div>
			<br/>
			<br/>
			<div id='content' data-role='content'>
				<div id='ctnLogon'>
					<div id="lblLogon" >
						Deposits
					</div>

					<form id="frmTransfer">
						<table>
							<tr>
								<td><label for='txtTransferAmt' style="font-size: 15px;font-weight: bold;font-size: smaller;">Amount in figures</label>
								<input type="text" name="txtTransferAmt"  id="txtTransferAmt"/>
								</td>
							</tr>
							<tr>
								<td><label for='txtTransferCurrency' style="font-size: 15px;font-weight: bold;font-size: smaller;">Currency</label>
								<input type="text" name="txtTransferCurrency"  id="txtTransferCurrency"/>
								</td>
							</tr>
							<tr>
								<td>
									<p>
									Upon clicking the transfer button the above stated amount will be transfered to the stated account number.
								</p>
								<input type="submit" name="btnDeposit" value="Deposit" id="btnDeposit" data-theme="a" />
								</td>
							</tr>
						</table>
					</form>
				</div>

			</div>
			<div id='footer'>
				Powered by NALO Solutions
			</div>
		</div>

	</body>

</html>