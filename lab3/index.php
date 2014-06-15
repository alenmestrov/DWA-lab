<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ZKD j.d.o.o.</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	<header>
	
	<a href="index.html"><img class="slikalogo" src="images/logo.png" alt="logo tvrtke"></a>
	<a href="#op">Osobni Podaci</a>
	<a href="#sk">Školovanje</a>
	<a href="#ri">Radno Iskustvo</a>
	<a href="#zn">Znanje</a>
	<div class="odjava"> 
	<label class="lboja">
	<?php $u=$_GET['username'];	echo ''. $u;	?>
	</label>
	<a href="login.html"><button>ODJAVA</button></a>
	</div>
	</header>
	
	<nav>
	<ul>
	<li><a href="popiskorisnika.php">Korisnici</a></li>
	<li><a href="unosnovogpacijenta.html">Unos</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	
	</ul>
	</nav>
	<div class="sadrzaj">
	<div class="content_info">
				<div id="osobno"><div id="naslov1"><a name="op"><h2>OSOBNI PODACI</h2></a></div>
				<div id="tekst1"><p>Ime i prezime: Alen Meštrov</p>
				<p>Mjesto i datum rođenja: Grad Zagreb, Republika Hrvatska,  22.04.1992.</p></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
				<div id="skola"><div id="naslov2"><a name="sk"><h2>PODACI O ŠKOLOVANJU</h2></a></div>
				<div id="tekst2"><p>Osnovna škola: Osnovna škola Davorin Trstenjak, Grad Zagreb, Republika Hrvatska</p>
				<p>Srednja škola: Tehnička škola Ruđera Boškovića, Grad Zagreb, Republika Hrvatska</p>
				<p>Fakultet: Tehničko veleučilište Zagreb, Grad Zagreb, Republika Hrvatska</p></div></div>
				<div id="podaci"><div id="naslov3"><a name="ri"><h2>PODACI O RADNOM ISKUSTVU</h2></a></div>
				<div id="tekst3"><p>H1 TELEKOM: Odjel za informacije, Odjel za odlazne pozive</p>
				<p>Međunarodna centrala</p></div></div>
				<div id="znanje"><div id="naslov4">
				<a name="zn"><h2>ZNANJA I VJEŠTINE</h2></a></div><div id="tekst4">
				<p>HTML5, CSS3, Javascript, PHP, jQuery, Java, C, C#, C++, Objective C</p></div></div>
			</div>
	</div>
	<footer class="footer">
			<span class="ftekst">COPYRIGHT ZKD, 2014</span>
		</footer>
	</body>
</html>
	