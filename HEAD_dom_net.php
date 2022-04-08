<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');

	$text_zaprosa = "DELETE FROM zayavka_chip WHERE id = '".$_GET["id"]."'";

	$zapros_vstavit = mysqli_query($con, $text_zaprosa);
	header('Location: zayavka_dom.php');

?>