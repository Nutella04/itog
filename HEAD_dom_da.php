<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');

	$zapros = "INSERT into animal_chip(poroda, age, text, gender, id_owner, img1, sick) 
				VALUES('{$_POST["poroda"]}','{$_POST["age"]}','{$_POST["text"]}', '{$_POST["gender"]}','{$_POST["id_owner"]}', '{$_POST["img1"]}','{$_POST["sick"]}')";
	$query = mysqli_query($con, $zapros);

	$text_zaprosa = "DELETE FROM zayavka_chip WHERE id = '".$_POST["id"]."'";
	$zapros_vstavit = mysqli_query($con, $text_zaprosa);
	header('Location: zayavka_dom.php');
 ?>