<?php 
if (isset($_GET['hapus'])) {
	require "config/main.php";
	switch ($_GET['hapus']) {
		case 'data_user':
			mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM customer WHERE id=".$_GET['id']);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'data_pembelian':
			mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM user WHERE id=".$_GET['id']);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'data_teknisi':
			mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM teknisi1 WHERE id=".$_GET['id']);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'spk':
			mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM teknisi WHERE id=".$_GET[id]);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		case 'admin':
			mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM admin WHERE id=".$_GET[id]);
			header('Location:index.php?page='.$_GET['hapus']);
			break;
		
		default:
			require_once("pages/404.php");
			break;
	}
}
else {
	require_once("pages/home.php");
}

 ?>