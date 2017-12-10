<!doctype html>
<html>

<?php include "/var/www/html/mobile.php"?>

<head>

	<title>KCP LV Index</title>
	
	<link rel="stylesheet" type="text/css" href="/kcp/crafts.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

	<?php include '/var/www/html/kcp/top/head.php' ?>
	
	<script src="/git/website-scripts/thousep2.js"></script>
	<script src="/git/kcp-scripts/KSP_extractDomain.js"></script>
	<script src="/git/kcp-scripts/lv.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=0.5">
</head>
<body>

<?php 
$pagename = "Launch Vehicles";
include '/var/www/html/kcp/top/top.php'
?>

<div id="main">
	<table id="data">
		<tr>
			<th>Tag</th>
			<th>Name</th>
			<th>Sell price</th>
			<th>Launch price</th>
			<th>Capacity</th>
			<th>Cost/ton</th>
			<th>Link</th>
			<th>Re-use</th>
		</tr>
		<!-- Inserted here by jQuery -->
	</table>

	<p>
		If a feild is 'NaN' or '?', it means I don't have it. Send a PM.
	</p>

	<button onclick="refresh()">Refresh cache</button>

	<p id="loading">
		Parsing a <a href="/kcp/corp/lvs.json">JSON file</a>, just for you. If this takes more than five seconds, the JSON file is probably messed up.
	</p>
</div>
</body>
</html>
