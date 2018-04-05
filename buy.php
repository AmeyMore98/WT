<?php
include('session.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, intial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>E-Book Store</title>
		<script type="text/javascript" src="pay-validation.js"></script>
</head>
<body onload="document.payment.hname.focus();">
	<!--Navigation-->
		<div class="header">
			Suyogon
		</div>
		<nav class="main-nav">
			<ul>
				<li><a href="index.html" >Home</a></li>
				<li><a href="cat.php" >Catalog</a></li>
				<li><a href="profile.php" >Profile</a></li>
				<li><a href="cart.php" >Cart</a></li>
				<li><a href="login.html" >Login</a></li>
				<li><a href="reg.html" >Register</a></li>
<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	    <div class="content">
			<h2>Review Order</h2>
			<table width="100%">
				<tr>
					<td>
							<STRONG>Shipping Address</STRONG><br>
							<font face="Calibri Light">
							Amey More<br>
							1/5 Sahajivan Society, Bhatwadi.<br>
							Ghatkopar (West)<br>
							MUMBAI, MAHARASHTRA 400084<br>
							India<br>
							Phone: 8976186706<br>
							</font>
					</td>
					<td>
						<STRONG>Payment Method: Credit Card</STRONG><br>
						<font face="Calibri Light">
						We’ll save this card for your convenience.<br><br>
						<form name="payment" onsubmit="return validPay();">
						<input type="text" name="hname" placeholder="Name on Card"><br><br>
						<input type="text" name="cardno" placeholder="Card Number"><br>
						</font>
					</td>
					<td>
						<input type="Submit" value="Place your order"><br><br></form>
						<font size="4"><STRONG>Order Summary</STRONG></font>
						<font face="Calibri Light">
							<table width="100%">
								<tr>
									<td>
										Items:
									</td>
									<td>
										Rs. 200
									</td>
								</tr>
								<tr>
									<td>
										Delivery:
									</td>
									<td>
										Rs. 50
									</td>
								</tr>
								<tr>
									<td colspan="2"><hr></td>
								</tr>
								<tr>
									<td>
										Order Total:
									</td>
									<td>
										Rs. 250
									</td>
								</tr>
							</table>
						</font>
					</td>
				</tr>
			</table>
		 </div>
	       
	  <footer class="footer">
	    	<div class="lfloat">&copy; VJTI, Matunga</div>
	    	<div class="rfloat">Made in India</div>
	    </footer>
</body>
</html>