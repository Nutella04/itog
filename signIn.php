<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylefront.css">
</head>
<body style="background-color: #EDF5E0">
<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');?>

<img src="img/Regis.png" style="height: 100vh; width: 100vw; position: static;">

<div class="box-shadow-1 position-regis " style="width: 34vw; background-color: white; border-radius: 1vw">
	<h2 class="mbv-2 text-center mtv-4">Вход</h2>
	<div class="col-8 mx-auto mtv-4 text-center pb-4">
		<form action="HEAD_signIn.php" method="POST" enctype="multipart/form-data" class="">
			<input class="mtv-3 form-control" type="" placeholder="Логин" name="login">
			<input class="mtv-3 form-control" type="password" placeholder="Пароль" name="password">
			<button class="btn btn-success form-control mtv-3 mbv-3">Войти</button>
			<a href="reg.php" class="text-dark">Регистрация</a><br>
			<a href="index.php" class="text-dark mbv-3">Вернуться назад</a>
		</form>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>