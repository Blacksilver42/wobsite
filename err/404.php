<!doctype html>
<head>
	<title>Error 404</title>

	<script>
		var _bftn_options = {
			theme: 'stop',
		}
	</script>
	<script src="https://widget.battleforthenet.com/widget.js" async></script>

	<style>
		body {
			margin: 0px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="/hint.css" />
	<link rel="stylesheet" type="text/css" href="/err/err_pages.css" />
	<link rel="stylesheet" type="text/css" href="/master.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div style="background:#e8bf28; padding: 5px; text-align: center;">
	<h1>Page not found :(</h1>
</div>
<br>


<div style="padding: 8px; text-align: center;">
	<p>
		This page doesn't exist. Sorry!
	</p>
	
	<p>
		You can <button onclick="history.back();">Go back</button>, jump to the <a href="/">Site root</a>, or the <a href="/kcp">KCP root</a>.
	</p>
</div>

<br>

<p id="witty-hint">
	<b>Excuse:</b>
		<?php
			echo shell_exec("/usr/games/fortune excuses-www");
		?>
</p>

<div id="watermark">
404
</div>

</body>
