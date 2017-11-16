<!doctype html>
<html>

<?php include "/var/www/html/mobile.php" ?>

<head>
	<title>
		KCP &raquo; Launch Manifest
	</title>

	<link rel="stylesheet" type="text/css" href="style.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<script src="/git/kcp-scripts/manifest.js"></script>
	
	<?php include '/var/www/html/kcp/top/head.php' ?>

</head>

<body>

<?php
$pagename = "Manifest";
include '/var/www/html/kcp/top/top.php'
?>

<p>Hover over orbit to see specifics.</p>

<br>

<h3>Next</h3>
<div id="next">
	<!-- Inserted here by JS -->
</div>

<h3>Future</h3>
<div id="future">
	<!-- Inserted here by JS -->
</div>

<h3>Past</h3>
<div id="past">
	<!-- Inserted here by JS -->
</div>


<p><em>+1 Kerbuck if you know what this page's styling is modeled after :)</em></p>

</body>
</html>
