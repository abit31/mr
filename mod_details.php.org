<?php 

if (isset($_GET['details'])) {
	$path = "pages/details/".$_GET['details'].".php";
	if (file_exists($path)) {
		require_once($path);
	}
	else {
		require_once("pages/404.php");
	}
}
else {
	require_once("pages/home.php");
}

 ?>