<?php
$username=$_GET["username"];
$pass=$_GET["password"];

$KORISNICKO_IME = "alen";
$LOZINKA = "alen";

if(empty($_GET["username"]))
	die("Korisnicko ime mora biti uneseno.<a href=\"login.html\">Povratak na login</a>");

if(empty($_GET["password"]))
	die("Lozinka mora biti unesena.<a href=\"login.html\">Povratak na login</a>");
	
if(!($username==$KORISNICKO_IME && $pass==$LOZINKA))
	die("Krivi username i korisnicko ime.<a href=\"login.html\">Povratak na login</a>");

header("Location: index.php?username=".urlencode($KORISNICKO_IME));

?>