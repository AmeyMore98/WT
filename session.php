<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_email'];
   
   $ses_sql = mysqli_query($db,"select * from users where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_user = $row['name'];
   $login_email = $row['email'];
   $login_pass = $row['pass'];
   
   if(!isset($_SESSION['login_email'])){
      header("location:login.html");
   }
?>