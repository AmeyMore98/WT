<?php 
 include('config.php');
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
	    <div class="content-book">
	    	
			
		 
			<?php 
				$is_num = $_GET['num'];
				$sql = mysqli_query($db, "SELECT title, author, price as mrp, price - price*discount/100 as dPrice, link, image, isbn FROM book where isbn = '" . $is_num . "'");
				$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
				echo "<div class='dimg'><img src='images\\" . $row['image'] . ".png' height='225px'></div>";
				echo "<div class='product-desc'>";
				echo "<font size='6'><strong>" . $row['title'] . "</strong></font><br>";
				echo "<font size='2' color='#767676'>" . $row['author'] . "</font><br><br>";
				echo "Rs. " . $row['dPrice'] . "<br>";
				echo "<font size='2' color='#767676'>M.R.P: <strike>" .$row['mrp'] . "</strike><br>";
				echo "You Save: Rs. " . (int)($row['mrp'] - $row['dPrice']) . "<br>Inclusive of taxes<br></font>";
			?>
			<font size="5" color="#008a0">In stock.</font><br>
			<font size="3"> Sold by Suyoging Buy (4.8 out of 5 | 26,831 ratings)<br> and Fulfilled by Suyogon. Gift-wrap available.</font><br>
			<a href="addToCart.php?num=<?php echo $is_num; ?>"><button>Add to Cart</button></a>
			<a href="buy.php"><button>Buy Now</button></a>
		 	</div>
	 
		 	<!-- <!-- <div class="product-details">
			<h3>Prodcut Details</h3>
				<ul>

				<li><b>Reading level:</b> 18+  years<br></li>
				<li><b>Paperback:</b> 304 pages</li>

				<li><b>Publisher:</b> Penguin (27 April 2006)</li>

				<li><b>Language:</b> English</li>

				<li><b>ISBN-10:</b> 0140449337</li>
				<li><b>ISBN-13:</b> 978-0140449334</li>

				<li><b>Product Dimensions: </b>12.9 x 1.8 x 19.7 cm</li>	
				</ul>
			</div> -->
		</div>
	       
	  <footer class="footer">
	    	<div class="lfloat">&copy; VJTI, Matunga</div>
	    	<div class="rfloat">Made in India</div>
	    </footer>
</body>
</html>