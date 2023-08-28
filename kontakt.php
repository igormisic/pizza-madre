<?php

	$naziv = $_POST['naziv'];
	
	$email = $_POST['email'];
	
	$komentar = $_POST['komentar'];
	
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Pizza Shop</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="icon" href="slike/logo.png" />
		<script type="text/javascript" src="javascript.js"></script>
	</head>
	
	<body>
		<header>
			<img id="logo" src="slike/logo.png" />
			<p id="ime">Pizza Madre</p>
			
			<nav>
				<ul>
					<li><a href="https://www.instagram.com" target="_blank"><img src="slike/instagram.png" /></a></li>
					<li><a href="https://www.facebook.com" target="_blank"><img src="slike/facebook.png" /></a></li>
					<li><a href="https://www.twitter.com" target="_blank"><img src="slike/twitter.png" /></a></li>
				</ul>
			</nav>
		</header>
		
		<main>
		
			<nav>
				<ul id="tabovi">
					<li><a href="index.html">POČETNA</a></li>
					<li><a href="meni.html">MENI</a></li>
					<li><a href="naruči.html">NARUČI</a></li>
					<li><a href="kontakt.html">KONTAKT</a></li>
				</ul>
			</nav>
			
			<section id="potvrda">
				<h1>Komentar uspešno primljen. Hvala Vam na razumevanju!</h1><br/>
				<?php
					echo "<b>Ime i prezime:</b><br/>" , $naziv;
					echo "<br/>";
					echo "<b>Adresa:</b><br/>" , $email;
					echo "<br/>";
				?>
			</section>
		
		</main>
		
		<footer>
			Igor Mišić 2019201487 | Univerzitet Singidunum
		</footer>
	</body>
	
	
</html>