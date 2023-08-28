<?php

	class Porudzbina {
		
		public $naziv;
		public $adresa;
		public $telefon;
		public $email;
		public $pica;
		public $kolicina;
		public $kreditna;
		
		function __construct($naziv, $adresa, $telefon, $email, $pica, $kolicina, $kreditna = "") {
			$this->naziv = $naziv;
			$this->adresa = $adresa;
			$this->telefon = $telefon;
			$this->email = $email;
			$this->pica = $pica;
			$this->kolicina = $kolicina;
			$this->kreditna = $kreditna;
		}
		
		public function izracunajIznos() {
			$iznos = $this->pica * $this->kolicina;
			return $iznos;
		}
		
	}
	
	$porudzbina = new Porudzbina($_POST['naziv'], $_POST['adresa'], $_POST['telefon'], 
								 $_POST['email'], $_POST['pica'], $_POST['kolicina'], $_POST['kreditna']);
	
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
				<h1>Detalji narudžbine</h1>
				<?php
					echo "<b>Ime i prezime:</b><br/>" , $porudzbina->naziv;
					echo "<br/>";
					echo "<b>Adresa:</b><br/>" , $porudzbina->adresa;
					echo "<br/>";
					echo "<b>Broj telefona:</b><br/>" , $porudzbina->telefon;
					echo "<br/>";
					echo "<b>E-Mail:</b><br/>" , $porudzbina->email;
					echo "<br/>";
					echo "<b>Iznos:</b><br/>" , $porudzbina->izracunajIznos() , " DIN";
					echo "<br/>";
					echo "<b>Vreme naručivanja:</b><br/>", date('H:i d.m.y.');
					echo "<br/>";
					if ($porudzbina->kreditna != "")
						echo "<b>Kreditna kartica:</b><br/>**** **** **** " , substr($porudzbina->kreditna, -4);
				?>
			</section>
		
		</main>
		
		<footer>
			Igor Mišić 2019201487 | Univerzitet Singidunum
		</footer>
	</body>
	
	
</html>