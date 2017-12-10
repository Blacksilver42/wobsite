<!doctype html>
<html>

<?php include "/var/www/html/mobile.php" ?>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<script src="/git/website-scripts/thousep2.js"></script>
	<script src="/git/kcp-scripts/corp.js"></script>
	
	<?php include '/var/www/html/kcp/top/head.php' ?>
	
	<title>KCP &raquo; Corp index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/kcp/crafts.css">
<style>
	
</style>

</head>
<body>

<?php 
$pagename = "Corp index";
include "/var/www/html/kcp/top/top.php";
?>

<?php if($_GET["corp"] == ""){ ?>

<div id="main">

<p>If anything is wrong, try <button title="xkcd.com/1854" onclick="reload()">reloading your cache</button>, then send a Discord PM.</p>

<table id="data">
	<tr id="header">
		<th>Tag</th>
		<th>Name</th>
		<th>Users</th>
		<th>Funds</th>
	</tr>
	
	<!-- Data inserted here by JQuery -->
	
</table>

<p id="loading">Loading, hold on to your hat...</p>

<p id="error" style="display:none; colour: red;">
	Oh no! It looks like the JSON parse failed. <br>
	This probably means that the JSON file is invalid. Please tell me.
</p>

<br>

</div>

<?php } else {
	shell_exec("corppage $_GET[corp]");
	echo("GOV");
}
?>



</body>
</html>
