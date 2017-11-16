<!doctype html>

<?php include "../mobile.php" ?>

<html>
<head>
	<title>Mobile check</title>
	<link rel="stylesheet" type="text/css" href="/master.css">
</head>
<body style="padding: 6px;">
<?php
	if(isMobile()){
		echo "Mobile.";
	} else {
		echo "Desktop.";
	}
?>
<br>

</body>
</html>
