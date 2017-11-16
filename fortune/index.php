<!doctype html>
<html>
	<head>
		<title>Fortune</title>
	</head>
	
	<body>
		<pre>
<?php 
	echo(shell_exec("/var/www/html/fortune/xyzzy.sh"));
?>
		</pre>
	<body>
</html>
