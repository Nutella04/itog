<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
	$queryOWNER = mysqli_query($con, "UPDATE animal_chip SET id_owner = '{$_SESSION["id"]}' WHERE id='{$_GET["id"]}'");
	header('Location: prof.php');
 ?>