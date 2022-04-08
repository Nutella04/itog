<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylefront.css">
</head>
<body style="background-image: url('img/Regis.png'); background-size: cover">
<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');?>

<!-- Шапка-->
    <header class="d-flex ptv-1 box-shadow-2 sticky" style="background-color: white; height: 3.5vw">
    <!-- лого и словечки -->
    <img src="img/logo.png" style="margin-left: 1%; width: 3.6vw; height: 2.67vw">
    <h1 onclick="return location.href = 'zayavka_dvor.php'" class="" style="font-size: 2vw; margin-left: 1vw">Мишка</h1>

    <div onclick="return location.href = 'zayavka_dom.php'" class="mtv-1 ptv-1 plv-2 prv-2 box-shadow-025" style="position: absolute; right: 25vw; background-color: white; border-radius: 0.3vw">
      <h1 class="header-text-1" style="">Заявки домашних собак</h1> 
    </div>

     <h1 onclick="return location.href = 'zayavka_dvor.php'" class="header-text-1 mtv-2" style="position: absolute; right: 8vw">Заявки дворовых собак</h1>

    <h1 onclick="return location.href = 'HEAD_exit.php'" class="header-text-1 mtv-2" style="position: absolute; right: 3vw">Выйти</h1>
    
  </header><!-- конец Шапка-->




<!-- Тело -->
  <div class="col-8 mx-auto" style="margin-top: 5%">

  	<?php 
  		$query = mysqli_query($con, "SELECT * FROM zayavka_chip");
    	$tabl = mysqli_query($con, "SELECT * FROM zayavka_chip");
    	

  	 ?>
     <h1 class="text-center" style="font-size: 2vw; font-family: Arial;">
      Всего заявок: <span><?php echo $tabl->num_rows; ?></span>
    </h1>
  	 <?php for ($i=0; $i < $tabl->num_rows; $i++) { 
        	$stroka= $query->fetch_assoc();
          $query2 = mysqli_query($con, "SELECT * FROM user WHERE id=".$stroka["id_owner"]);
          $stroka2= $query2->fetch_assoc();

          ?>

  	<!-- Карточка -->

  	<div class="row bg-light mb-4 box-shadow-025">
  		<!--Фото-->
          <div style="width: 20vw">
          	
            <h1 class="text-center mtv-2" style="font-size: 1.3vw; font-family: Arial;">
            Заявка №<span><?php echo $i+1; ?></span></h1>

            <div class="mbv-2" style="width: 16vw; height: 16vw; margin-left: 2vw; background-image: url(<?php 
            	if ($stroka["img1"]==null) {
            		# code...
            	}
            	else{
            		echo $stroka["img1"]; 
            	}
            	?>); background-size: cover"></div>
          </div>
          <!--конец Фото-->

          <!-- Информация-->
          <div style="width: 40vw;">
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Порода: <span><?php echo $stroka["poroda"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Возраст: <span><?php echo $stroka["age"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Пол: <span><?php echo $stroka["gender"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Описание: <span><?php echo $stroka["text"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Болезни: <span><?php echo $stroka["sick"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Хозяин: <span><?php echo $stroka2["login"]?></span></h1>

            <form action="HEAD_dom_da.php" method="POST" enctype="multipart/form-data">
                <input class="mt-2 form-control" type="" placeholder="Порода" name="poroda" value="<?php echo $stroka["poroda"] ?>" style="display: none;">
                <input class="mt-2 form-control" type="" placeholder="Возраст" name="age" value="<?php echo $stroka["age"] ?>" style="display: none;">
                <input class="mt-2 form-control" type="" placeholder="Пол" name="gender" value="<?php echo $stroka["gender"] ?>" style="display: none;">
                <input class="mt-2 form-control" type="" placeholder="Фото" name="text" value="<?php echo $stroka["text"] ?>" style="display: none;">
                <input class="mt-2 form-control" type="" placeholder="Айди" name="sick" value="<?php echo $stroka["sick"] ?>" style="display: none;">
                <input class="mt-2 form-control" type="" placeholder="Фото" name="img1" value="<?php echo $stroka["img1"] ?>" style="display: none;">
                <input class="mt-2 form-control" type="" placeholder="Айди" name="id" value="<?php echo $stroka["id"] ?>" style="display: none;">
                <input class="mt-2 form-control" type="" placeholder="Хозяин" name="id_owner" value="<?php echo $stroka2["id"] ?>" style="display: none;">
                <button class="btn btn-success col-3 mt-2" >Одобрить</button>
              </form>


            
            <button class="btn btn-danger col-3 mt-2 mb-3" onclick="return location.href = '<?php echo "HEAD_dom_net.php?id=".$stroka["id"]?>'">Отказать</button>
          </div>
          <!-- конец Информация-->
  	</div>
  	<!-- Карточка -->

  <?php } ?>

  </div>
<!-- конец Тело -->

</body>
</html>