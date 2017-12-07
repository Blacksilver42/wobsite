<!-- From /kcp/top/top.php -->
<div id="top">
<?php 
	$page = $_SERVER['REQUEST_URI'];
	$urls = [
		"/kcp/",
		"/kcp/howto/",
		"/kcp/signup.php",
		"http://goo.gl/ww5G64",
		"/kcp/bot/",
		"/kcp/manifest/",
		"/kcp/corp/",
		"#vehicles",
		"/kcp/math/",
		"/kcp/json/"
	];
	$name = [
		"Main",
		"HOWTO",
		"Signup",
		"Thread",
		"Bot",
		"Manifest",
		"Corp",
		"Vehicles&nbsp;&darr;",
		"Math",
		"JSON"
	];

	$vehicles = [
		"/kcp/lvs/",
		"/kcp/plds/",
		"/kcp/service/"
	];


	if (isMobile()){
		echo "<h1><a href=\"/kcp\" class=\"ninja\">KCP</a> &raquo; $pagename</h1>";
		echo "<p class=\"hamburger\">&#9776;</p>";
	} elseif($pagename == ""){
		echo "<h1>Kerbal Capitalism Program</h1>";
	} else {
		echo "<h1><a href=\"/kcp\" class=\"ninja\">KCP</a> &raquo; $pagename</h1>";
	}
?>

	<div id="nav">


<!-- Using sorcery, I generate the table with php: -->

<?php 
	foreach($urls as $url){
		if($page == $url){
			echo "<a class=\"this\"\t";
		 } else {
			echo "<a\t\t\t\t";
		}
		echo "href=\"$url\">" . $name[array_search($url,$urls)] . "</a>\n";
	}
?>
	</div> <!-- /nav -->
</div> <!-- /top -->

<!-- /From /kcp/top/top.php -->
