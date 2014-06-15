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
	<label class="lboja"><? php	echo $_GET['username'];	?></label>
	<a href="login.html"><button>ODJAVA</button></a>
	</div>
	</header>
	
	<nav>
	<ul>
	<li><a href="popiskorisnika.php">Popis Korisnika</a></li>
	<li><a href="unosnovogpacijenta.html">Unos</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	
	</ul>
	</nav>
	<div class="sadrzaj">
	<div class="content_info">
					  <?php

							 $rijec = $_GET['trazi'];

						// gets all <p> tags
						/* $images=document.getElementsByTagName('td');
						
						echo $images[0]; */
							$xml = file_get_contents('popiskorisnika.php');
							$dom = new DOMDocument;
							@$dom->loadHTML($xml);
							$pacijent = $dom->getElementsByTagName('tr');
							foreach($pacijent as $pac) {
									$pos = strpos($pac, $rijec);
									echo $pos;
							}
	               ?></div>
	</div>
	<footer class="footer">
			<span class="ftekst">COPYRIGHT ZKD, 2014</span>
		</footer>
	</body>
</html>
	