<!doctype html>
<html>

<?php include "/var/www/html/mobile.php" ?>

<head>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="math.js"></script>

	<?php include '/var/www/html/kcp/top/head.php' ?>
</head>


<body>

<?php
$pagename = "Math";
include '/var/www/html/kcp/top/top.php'
?>

<br>
<h2> WIP, IT PROBABLY DOESN'T WORK</h2>
<br>

<div id="PP">
	<div id="payload-score" class="form">
		<h3>Payload score</h3>
		<p>LPs are not required to use the highest-scoring sattelite, it's just a general measure of sattelite goodness. GOV will use the highest-scoring to be impartial.</p>

		<input id = "cost"	type="number" placeholder="cost">
		<input id = "rely"	type="number" placeholder="failures/year">

		<p> <button onclick="score()">Calculate!</button> </p>

		<span id="out-score" class="out"><span style="color:grey">Score</span></span>
	</div>


	<div id="payoutPerYear" class="form">
		<h3>Comsat income</h3>
		<p>Government payout for use of a comsat, per year.</p>
		<form oninput="ppy.value=calcPPY(parseInt(Kb.value), parseInt(com.value), parseInt(body.value), special)" >
			<input id="Kb"				type="number"	placeholder="Kb/s"></input><br>
			<input id="com"				type="number"	placeholder="comm devices"></input><br>
			<select id="body">
				<option value="1">Kerbin</option>
				<option value="2">Mun</option>
				<option value="3">Minmus</option>
				<option value="4">Eve</option>
				<option value="5">Duna</option>
				<option value="6">Dres</option>
				<option value="7">Moho</option>
				<option value="8">Jool</option>
				<option value="9">Eeloo</option>
			</select><br>
			<input id="special"	type="checkbox" title="GEO, SSO, etc.">Special orbit</input><br>
			

			<output name="ppy" for="Kb com body special">

			</output>
		</form>
	</div>
</div>


<div id="LP">
	<div id="rocketprice" class="form">
		<h3>Rocket prices</h3>
		
		<input id="buildcost" type="number" placeholder="Build cost">
		
		<p>
			<button onclick="buildCost()">Calculate</button>
		</p>
		
		<table class="out">
			<tr>
				<td>Dev cost</td>
				<td id="devcost">...</td>
			</tr>
			<tr>
				<td>Launch cost</td>
				<td id="launchcost"></td>
			</tr>
			<tr>
				<td>Test fail fine</td>
				<td id="testfine"></td>
			</tr>
			<tr>
				<td>Launch fail fine</td>
				<td id="failfine"></td>
			</tr>
			<tr>
				<td>Refit cost</td>
				<td id="refitcost"></td>
			</tr>
		</table>
	</div>
</div>

</body>
</html>
