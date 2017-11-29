<!doctype html>
<html>

<?php include "/var/www/html/mobile.php" ?>

<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
		<script src="/git/kcp-scripts/plds.js"></script> 
		<script src="/git/kcp-scripts/KSP_extractDomain.js"></script> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>KCP &raquo; Payload manifest</title>
		
		<?php include '/var/www/html/kcp/top/head.php' ?>
		
	<script>
		$.getJSON("/kcp/json/payloads.json", function(J){
			console.log(J);
			$("#jsondump").html(JSON.stringify(J));
		})
	</script>
</head>

<body>
<?php 
	$pagename = "Payloads";
	include '/var/www/html/kcp/top/top.php'
?>

<h1>WIP</h1>

<div id="main">

	<table id="data">
		<tr>
			<th>Tag</th>
			<th>Name</td>
			<th>Cost</th>
			<th>Mass</th>
			<th>Link</th>
		</tr>
	</table>

	<button onclick="reload()">Reload cache</button>
<br>
<br>

</div>
</body>
</html>
