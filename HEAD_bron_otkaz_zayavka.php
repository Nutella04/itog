<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');

	$query = mysqli_query($con, "UPDATE zayavka_otlov SET status = '0' WHERE id='{$_GET["id"]}'");

	header('Location: zayavka_dvor.php');

?>