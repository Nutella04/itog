<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
	$queryLOGIN = mysqli_query($con, "UPDATE user SET login = '{$_POST["login"]}' WHERE id='{$_SESSION["id"]}'");
	$queryPHONE = mysqli_query($con, "UPDATE user SET phone = '{$_POST["phone"]}' WHERE id='{$_SESSION["id"]}'");
	$queryNAME= mysqli_query($con, "UPDATE user SET name = '{$_POST["name"]}' WHERE id='{$_SESSION["id"]}'");
	$querySURNAME = mysqli_query($con, "UPDATE user SET surname = '{$_POST["surname"]}' WHERE id='{$_SESSION["id"]}'");
	$queryOTNAME = mysqli_query($con, "UPDATE user SET otname = '{$_POST["otname"]}' WHERE id='{$_SESSION["id"]}'");

	header('Location: prof.php');
 ?>