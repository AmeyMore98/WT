<?php
	include('session.php');
	$isbn = $_GET['num'];

	$login_email = $_SESSION['login_email'];

	$sql = mysqli_query($db, "DELETE FROM cart WHERE email ='" . $login_email ."' AND isbn='" . $isbn ."' ");
	header('location: cart.php');
?>