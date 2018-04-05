<?php
	include('session.php');
	$isbn = $_GET['num'];

	$login_email = $_SESSION['login_email'];

	$sql = mysqli_query($db, "INSERT INTO cart VALUES ('$login_email', '$isbn', 1)");
	header('location: cart.php');
?>