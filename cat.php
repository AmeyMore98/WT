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
	<div class="content">
			<?php 
				$loop1 = mysqli_query($db, "SELECT DISTINCT category FROM book");
				while ($row1 = mysqli_fetch_array($loop1,MYSQLI_ASSOC))
				{
					 echo "<h3>" . $row1['category'] . "</h3>";
					 echo "<section class='boxes'>";
					 $loop2 = mysqli_query($db, "SELECT title, author, price - price*discount/100 as dPrice, link, image, isbn FROM book WHERE category = '" . $row1['category'] . "'");
						while ($row = mysqli_fetch_array($loop2,MYSQLI_ASSOC)){
							 echo "<div class='box'>";
						     // echo "<a href=" . $row['link'] . ".html>";
						     echo "<a href='book.php?num=" . $row['isbn'] . "'>";
						     echo "<img src='images\\" . $row['image'] . ".png' height='225px'></a>";
						     echo "<a href=" . $row['link'] . ".html>";
						     echo "<p>" . $row['title'] . "</br>";
						     echo $row['author'] . "</p>";
						     echo "<i>Price</i>: Rs. " . (int) $row['dPrice'] . "</a>";
						     echo "</div>";
					    }
				     echo "</section>";
 				}
			?>
	</div>		
	 
	<footer class="footer">
	    	<div class="lfloat">&copy; VJTI, Matunga</div>
	    	<div class="rfloat">Made in India</div>
	</footer>
</body>
</html>