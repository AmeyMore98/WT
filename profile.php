<?php
	include('session.php')
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, intial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script>
			var editing  = false;
			if (document.getElementById && document.createElement) {
				var butt = document.createElement('BUTTON');
				var buttext = document.createTextNode('Save');
				butt.appendChild(buttext);
				// butt.style.position = absolute;
				butt.classList.add('btn');
				butt.onclick = saveEdit;
			}

			function catchIt(e) {
				if (editing) return;
				if (!document.getElementById || !document.createElement) return;
				if (!e) var obj = window.event.srcElement;
				else var obj = e.target;
				while (obj.nodeType != 1) {
					obj = obj.parentNode;
				}
				if (obj.tagName == 'TEXTAREA' || obj.tagName == 'A') return;
				while (obj.nodeName != 'B' && obj.nodeName != 'HTML') {
					obj = obj.parentNode;
				}
				if (obj.nodeName == 'HTML') return;
				var x = obj.innerHTML;
				var y = document.createElement('TEXTAREA');
				var z = obj.parentNode;
				z.insertBefore(y,obj);
				z.insertBefore(butt,obj);
				z.removeChild(obj);
				y.value = x;
				y.focus();
				editing = true;
			}

			function saveEdit() {
				var area = document.getElementsByTagName('TEXTAREA')[0];
				var y = document.createElement('B');
				var z = area.parentNode;
				y.innerHTML = area.value;
				z.insertBefore(y,area);
				z.removeChild(area);
				z.removeChild(document.getElementsByTagName('button')[0]);
				editing = false;
			}

			document.onclick = catchIt;
		</script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>E-Book Store</title>
		<style type="text/css">
			.content-sub {
				display: grid;
				grid-template-columns: repeat(3, 1fr);
			}

			.profile {
				grid-column-start: 2;
				display: grid;
				grid-gap: 10px;
				grid-template-columns: repeat(2, 1fr);
				grid-auto-rows: 50px;
			}

			.box1 ,.box2, .box6{
				grid-column-start: 1;
				grid-column-end: 3;
				text-align: center;
			}

			.box3-1, .box4-1, .box5-1, .box3-2, .box4-2, .box5-2{
				font-size: 20px;
			}
		</style>
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
			<div class="content-sub">
	    	<div class="profile">
	    			<div class="box1"><h2>User Security</h2></div>
    				<div class="box2"><p>(Click to Edit)</p></div>
					<div class="box3-1">Name: </div><div class="box3-2"><b><?php echo $login_user; ?></b><br></div>
					<div class="box4-1">E-mail: </div><div class="box4-2"><b><?php echo $login_email; ?></b><br></div>
					<div class="box5-1">Password: </div><div class="box5-2"><b><?php echo $login_pass; ?></b></div>
					<div class="box6" style="text-align: center;">
	    		    <a href="cart.php" style="text-decoration: none; color: #fff;"><button class="btn">My Cart</button></a>
	    			</div>
	    	</div>
	    	</div>
		</div>		
	  <footer class="footer">
	    	<div class="lfloat">&copy; VJTI, Matunga</div>
	    	<div class="rfloat">Made in India</div>
	    </footer>
</body>
</html>