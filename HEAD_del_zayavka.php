<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');

	$img_dir = 'img/'; //папка где хранятся картинки
	$img_name = $img_dir . basename($_FILES['file']['name']); //путь где хранится картинка или полное название картинки
	$upload = move_uploaded_file($_FILES['file']['tmp_name'], $img_name);

	
	$zapros = "INSERT into animal_chip(poroda, age, text, gender, id_finder, img1, sick) 
				VALUES('{$_POST["poroda"]}','{$_POST["age"]}','{$_POST["text"]}', '{$_POST["gender"]}','{$_POST["id_finder"]}', '{$img_name}','{$_POST["sick"]}')";
	$query = mysqli_query($con, $zapros);
	header('Location: del_zayavka.php?id='.$_POST["id"]);

?>