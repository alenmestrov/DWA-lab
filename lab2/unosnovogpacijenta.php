<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ZKD j.d.o.o.</title>
		<link rel="stylesheet" href="css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<header>
<a href="index.html"><img class="slikalogo" src="images/logo.png" alt="logo tvrtke"></a>
	<a href="#op">Osobni Podaci</a>
	<a href="#sk">Školovanje</a>
	<a href="#ri">Radno Iskustvo</a>
	<a href="#zn">Znanje</a>
	<div class="odjava">
	<label class="lboja"><? php	echo $_GET['username'];	?></label>
	<a href="login.html"><button>ODJAVA</button></a>
	</div>
	</header>
	
	<nav>
	<ul>
	<li><a href="popiskorisnika.php">Korisnici</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	
	</ul>
	</nav>
	<div class="sadrzaj">
	<div class="content_info">
		<?php
		echo 'Ime:' . $_POST['ime'] . '</br>';
		echo 'Prezime:' . $_POST['prezime'] . '</br>';
		echo 'Spol:' . $_POST['gen'] . '</br>';
		echo 'Datum Rodenja:' . $_POST['datumrodenja'] . '</br>';
		echo 'Mjesto:' . $_POST['mjesto'] . '</br>';
		echo 'Adresa:' . $_POST['adresa'] . '</br>';
		echo 'Krvna grupa:' . $_POST['krv'] . '</br>';
		echo 'Tegobe:' . $_POST['tegobe'] . '</br>';
		echo 'Koje tegobe:' . $_POST['kojetegobe'] . '</br>';
		echo 'Alergija:' . $_POST['alergija'] . '</br>';
		echo 'Koja alergija:' . $_POST['kojaalergija'] . '</br>';
		
		?>
			</div>
	</div>
	<footer class="footerupis">
			<span class="ftekst">COPYRIGHT ZKD, 2014</span>
		</footer>
	</body>
</html>