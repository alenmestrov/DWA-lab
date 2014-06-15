<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ZKD j.d.o.o.</title>
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		var $rows = $('#table tr');
			$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
});
</script>
	
	
	</head>
	<body>
	<header>
<a href="index.html"><img class="slikalogo" src="images/logo.png" alt="logo tvrtke"></a>
	
	<div class="gumbodjava"><a href="login.html"><button>ODJAVA</button></a></div>
	</div>
	</header>
	
	<nav>
	<ul>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	<li><a href="#">Nav</a></li>
	
	</ul>
	</nav>
	<div class="sadrzaj">
	<div class="content_info">
	<form action="pretragapacijenta.php" method="GET">
			  Pretraži: <input type="search" name="trazi">
			  <input type="submit">
			</form>
				 <table id="table" width="100%">
			    
					<tr>
					  <th>Ime</th>
					  <th>Prezime</th>		
					  <th>Spol</th>
					  <th>Datum rođenja</th>
					  <th>Mobitel</th>
					  <th>Adresa</th>
					  <th>Mjesto</th>
					</tr>
					<tr class="row">
					  <td>Štefica</td>
					  <td>Ostojić</td>		
					  <td>Ž</td>
					  <td>17.3.1937</td>
					  <td>091/7121688</td>
					  <td>Redovka 9</td>
					  <td>Zagreb</td>
					</tr>
					<tr class="row">
					  <td>Ivan</td>
					  <td>Kušan</td>		
					  <td>M</td>
					  <td>19.7.1979</td>
					  <td>098/1667148</td>
					  <td>Marinovečka 12</td>
					  <td>Zagreb</td>
					</tr>
					<tr class="row">
					  <td>Hrvoje</td>
					  <td>Radić</td>		
					  <td>M</td>
					  <td>6.6.1944</td>
					  <td>098/7317883</td>
					  <td>Dore Pejačević 28</td>
					  <td>Zagreb</td>
					</tr>
					<tr class="row">
					  <td>Vjeran</td>
					  <td>Delić</td>		
					  <td>M</td>
					  <td>2.3.1978</td>
					  <td>022/4672651</td>
					  <td>Banovski Put 11</td>
					  <td>Zagreb</td>
					</tr>
					<tr class="row">
					  <td>Filip</td>
					  <td>Pavlović</td>		
					  <td>M</td>
					  <td>28.3.1939</td>
					  <td>092/6058667</td>
					  <td>Sitnice 24</td>
					  <td>Zagreb</td>
					</tr>
					</table>
				
				</div>
	</div>
	<footer class="footer">
			<span class="ftekst">COPYRIGHT ZKD, 2014</span>
		</footer>
	</body>
</html>
	