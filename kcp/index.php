<!doctype html>

<?php include '/var/www/html/mobile.php' ?>

<html>
	<head>
	<script>
		var _bftn_options = {
			theme: 'stop',
		}
	</script>
	<script src="https://widget.battleforthenet.com/widget.js" async></script>
		<title>Kerbal Captialism Program</title>
		
		<link rel="stylesheet" type="text/css" href="/kcp/style.css" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	
		<?php include '/var/www/html/kcp/top/head.php' ?>
		
		

		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	</head>
<body>



<a href=".." title="Back">
	<div id="back"></div>
</a>

<?php include '/var/www/html/kcp/top/top.php' ?>

<div id="main">
	
	<a href="signup.html">SIGN ME UP, SCOTTY</a>

	<div class="section" id="rocketdev">
		<h3>Rocket development</h3>

		<p>
			Rocket development "Generations" will last 3 (kerbal) years. <br>
			Diamater options include those from previous generations. <br>
			Max heights do not include fairings.
		</p>

		<table>
			<tr>
				<th>Gen</th>
				<th>Max. Height</th>
				<th>Diameter options</th>
			</tr>
			<tr>
				<td>G1</td>
				<td>20m</td>
				<td>1.25m</td>
			</tr>
			<tr>
				<td>G2</td>
				<td>30m</td>
				<td>1.875m</td>
			</tr>
			<tr>
				<td>G3</td>
				<td>30m</td>
				<td>2.5m, 3x1.25</td>
			</tr>
			<tr>
				<td>G4</td>
				<td>40m</td>
				<td>2.5m, 3x1.25</td>
			</tr>
			<tr>
				<td>G5</td>
				<td>40m</td>
				<td>2.5m+2x1.25m</td>
			</tr>
			<tr>
				<td>G5</td>
				<td>50m</td>
				<td>2.5m+2x1.25m</td>
			</tr>
			<tr>
				<td>etc...</td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>

	<div class="section" id="ftzt">
		<h3>For the zillionth time</h3>
		
		<table>
			<tr>
				<td>Build price</td>
				<td>What the VAB says</td>
			</tr>
			<tr>
				<td>Launch price</td>
				<td>110% Build price</td>
			</tr>
			<tr>
				<td>Sell price</td>
				<td>Whatever you want to charge</td>
			</tr>
		</table>
		<p>See the <a href="math">math</a> page.</p>
	</div>


	
	<div class="section" id="sched">
		<h3>Launch Schedule</h3>

		<table>
			<tr>
				<th>M</th>
				<td>Maybe one</td>
			</tr>
			<tr>
				<th>T</th>
				<td>Maybe one</td>
			</tr>
			<tr>
				<th>W</th>
				<td>one or two</td>
			</tr>
			<tr>
				<th>T</th>
				<td>At least one, possibly up to three</td>
			</tr>
			<tr>
				<th>F</th>
				<td>one or two</td>
			</tr>
			<tr>
				<th>S</th>
				<td>Maybe one</td>
			</tr>
			<tr>
				<th>S</th>
				<td>Maybe one</td>
			</tr>
		</table>
	</div>
</div>

	
</body>
</html>
