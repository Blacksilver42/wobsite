<!doctype html>

<?php include "/var/www/html/mobile.php" ?>

<html>
<head>
<?php include "/var/www/html/kcp/top/head.php" ?>
<title>KCP &raquo; How to play</title>

<link rel="stylesheet" type="text/css" href="/master.css">
</head>
<body>
<?php
$pagename = "How to play";
include "/var/www/html/kcp/top/top.php"
?>

<div id="main">
	<ul>
		<li>New players...
			<ul>
				<li>Create a corp: <span class="code">/corp create <u>NAME</u></span>. Set the tag with <span class="code">/corp tag <u>TAG</u> <u>NAME</u></li>
				<li>Join a corp: <span class="code">/corp join <u>NAME</u></span></li>
			</ul>
		</li>
	</ul>
</div>

</body>
</html>
