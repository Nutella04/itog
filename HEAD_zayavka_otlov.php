<?php session_start() ?>
<?php 
	$img_dir = 'img/'; //папка где хранятся картинки
	$img_name = $img_dir . basename($_FILES['file']['name']); //путь где хранится картинка или полное название картинки
	$upload = move_uploaded_file($_FILES['file']['tmp_name'], $img_name);

	$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
	$zapros = "INSERT into zayavka_otlov(kolvo, text, adres, img, id_finder) 
				VALUES('{$_POST["kolvo"]}','{$_POST["text"]}', '{$_POST["adres"]}', '{$img_name}', '{$_SESSION['id']}')";
	$query = mysqli_query($con, $zapros);
	header('Location: index.php');

?>