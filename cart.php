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
	</head>
<body>
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
		<h2>Shopping Cart</h2>
			<table width="100%">
			<tr>
			<td></td>
			<td width="50%"></td>
			<td width="30%">Price</td>
			<td>Quantity</td>
			</tr>
			<tr>
			<td colspan="4"><hr></td>
			</tr>
			<?php 
			$loop1 = mysqli_query($db, "SELECT isbn, quantity FROM cart WHERE email='" .$_SESSION['login_email'] ."'");
				while ($row1 = mysqli_fetch_array($loop1,MYSQLI_ASSOC)){
						echo "<tr>";
						$loop2 = mysqli_query($db, "SELECT title, author, price - price*discount/100 as dPrice, image, isbn FROM book where isbn = '" . $row1['isbn'] ."'");
						$row = mysqli_fetch_array($loop2, MYSQLI_ASSOC);
						echo "<td><img src='images\\" . $row['image'] . ".png' height='105px'></td>";
						echo "<td>" . $row['title'] . "<br>";
						echo "<font size='2' color='#767676'>" . $row['author'] . "</font><br>";
						echo "<font size='2' color='#0066C0'><a href='deleteFromCart.php?num=" . $row['isbn'] . "'>Delete</a></font>";
						echo "</td>";
						echo "<td valign='top'>" . (int)$row['dPrice'] . "</td>";
						echo "<td valign='top'>";
						echo "<select><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option></select>";
						echo "</td></tr><tr><td colspan='4'><hr></td></tr>";
					}
			?>
			<td colspan="3"></td>
			<td><a href="buy.php"><button class="btn">Proceed to Checkout</button></a></td>
			</tr>
			</table>
		</div>
		   
	  <footer class="footer">
	    	<div class="lfloat">&copy; VJTI, Matunga</div>
	    	<div class="rfloat">Made in India</div>
	    </footer>
</body>
</html>