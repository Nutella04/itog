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

    <h1 onclick="return location.href = 'zayavka_dom.php'" class="header-text-1 mtv-2" style="position: absolute; right: 25vw">Заявки домашних собак</h1>

    <div onclick="return location.href = 'zayavka_dvor.php'" class="mtv-1 ptv-1 plv-2 prv-2 box-shadow-025" style="position: absolute; right: 8vw; background-color: white; border-radius: 0.3vw">
      <h1 class="header-text-1" style="">Заявки дворовых собак</h1> 
    </div>

    <h1 onclick="return location.href = 'HEAD_exit.php'" class="header-text-1 mtv-2" style="position: absolute; right: 3vw">Выйти</h1>
    
  </header><!-- конец Шапка-->




<!-- Тело -->
  <div class="col-8 mx-auto" style="margin-top: 5%">

    <?php 
      $query = mysqli_query($con, "SELECT * FROM zayavka_otlov");
      $tabl = mysqli_query($con, "SELECT * FROM zayavka_otlov");
      

     ?>
     <h1 class="text-center" style="font-size: 2vw; font-family: Arial;">
      Всего заявок: <span><?php echo $tabl->num_rows; ?></span>
    </h1>
     <?php for ($i=0; $i < $tabl->num_rows; $i++) { 
          $stroka= $query->fetch_assoc();
          $query2 = mysqli_query($con, "SELECT * FROM user WHERE id=". $stroka['id_finder']);
        $stroka2= $query2->fetch_assoc(); ?>

    <!-- Карточка -->

    <div class="row bg-light mb-4 box-shadow-025">
      <!--Фото-->
          <div style="width: 20vw">
            
            <h1 class="text-center mtv-2" style="font-size: 1.3vw; font-family: Arial;">
            Заявка №<span><?php echo $i+1; ?></span></h1>

            <div class="mbv-2" style="width: 16vw; height: 16vw; margin-left: 2vw; background-image: url(<?php 
              if ($stroka["img"]==null) {
                # code...
              }
              else{
                echo $stroka["img"]; 
              }
              ?>); background-size: cover"></div>
          </div>
          <!--конец Фото-->

          <!-- Информация-->
          <div style="width: 40vw;">
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Количество: <span><?php echo $stroka["kolvo"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Местонахождение: <span><?php echo $stroka["adres"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Автор заявки: <span><?php echo $stroka2["login"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Номер телефона: <span><?php echo $stroka2["phone"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Описание: <span><?php echo $stroka["text"] ?></span></h1>
            <h1 class="mtv-3" style="font-size: 1.3vw; font-family: Arial;">Статус: <span><?php 
              if ($stroka["status"]==0) {
                echo "Не ищут";
              }
              else{
                echo "Ищут";
              }
            ?></span></h1>
            <?php if ($stroka["status"]==0) {?>
              <!--Бронирование-->
              <button class="btn btn-primary col-3 mt-2 mb-3" onclick="return location.href = '<?php echo "HEAD_bron_zayavka.php?id=".$stroka["id"]?>'">Бронь</button>
              <!--конец Бронирование-->
            <?php } else{ if ($stroka["status"]==$_SESSION['id']) {?>
              <!--Удаление заявки-->
              <button class="btn btn-warning col-3 mt-2 mb-3" onclick="return location.href = '<?php echo "HEAD_bron_otkaz_zayavka.php?id=".$stroka["id"]?>'">Отказ Бронь</button>
              <button class="btn btn-danger col-3 mt-2 mb-3" onclick="return location.href = '<?php echo "del_zayavka.php?id=".$stroka["id"]?>'">Del</button>
              <!--Удаление заявки-->
            <?php }}?>   
            
            
          </div>
          <!-- конец Информация-->
    </div>
    <!-- Карточка -->

  <?php } ?>

  </div>
<!-- конец Тело -->

</body>
</html>