<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="stylefront.css">
</head>
<body style="background-image: url('img/Regis.png'); background-size: cover">
<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');?>

	<!-- хедер -->
  <header class="d-flex ptv-1 box-shadow-025 sticky" style="background-color: white; height: 3.5vw">
    <!-- лого и словечки -->
    <img src="img/logo.png" style="margin-left: 1%; width: 3.6vw; height: 2.67vw">
    <h1 onclick="return location.href = 'index.php'" class="bitter mtv-1" style="font-size: 2vw; margin-left: 1vw">Мишка</h1>
    <h1 onclick="return location.href = 'list_animals.php'" class="header-text-1 mtv-2 montserrat" style="margin-left: 3vw">Приобретение собаки</h1>
    <h1 onclick="return location.href = '#'" class="header-text-1 mtv-2 montserrat" style="margin-left: 3vw">Список приютов</h1>
    <h1 onclick="return location.href = '#'" class="header-text-1 mtv-2 montserrat" style="margin-left: 3vw">Всё необходимое собаке</h1>

    <?php if ($_SESSION['id']==null) {?>
      <!-- вход и регистрация -->
    <div onclick="return location.href = 'signIn.php'" class="mtv-2 montserrat" style="margin-left: 28vw; position: absolute; right: 11vw">
      <h1 class="header-text-1">Вход</h1>
    </div>
    <div onclick="return location.href = 'reg.php'" class="mtv-2 montserrat" style="margin-left: 1vw; position: absolute;right: 1vw">
      <h1 class="header-text-1">Регистрация</h1>
    </div>
    <?php }else{ ?>  
    
    <!-- иконка профиля -->
    <div class="dropdown text-end mtv-1" style="margin-left: 1vw; position: absolute;right: 1vw;">
      <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="img/profile.png" alt="mdo" class="rounded-circle" style="height: 2.4vw; width: 2.4vw">
      </a>
      <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="background-color: white"> 
        <li><a class="dropdown-item montserrat" href="prof.php">Профиль</a></li>
        <li><a class="dropdown-item montserrat" href="HEAD_exit.php">Выйти из профиля</a></li>
      </ul>
    </div>
    <?php } ?>

    <!-- конец иконка профиля -->

  </header>
  <!-- конец хедер-->


<?php 
    $query = mysqli_query($con, "SELECT * FROM animal_chip WHERE id_owner = 0");
    $tabl = mysqli_query($con, "SELECT * FROM animal_chip WHERE id_owner = 0");
    
 ?>


<!-- Тело -->
	<div class="col-8 mx-auto" style="margin-top: 5%">
    <!-- Две карточки-->
    <div class="row">
      <?php for ($i=0; $i < $tabl->num_rows; $i++) { 
        $stroka= $query->fetch_assoc();
      ?>

      <!-- Первая карточка-->

      <div class="box-shadow-025 mt-4" style="width: 41%; margin-left: 6%; background-color: white; border-radius: 0.3vw;">
        <div class="row" >
          <!--Фото-->
          <div class="col-5 mx-auto">
            

            <div class="w-100 mt-3" style="padding-top: 100%; background-image: url(<?php echo $stroka["img1"]; ?>); background-size: cover; ">
              </div>
          </div>

          <!--конец Фото-->

          <!-- Информация-->
          <div class="col-7">

            <h1 class="mtv-4 mlv-1 bitter" style="font-size: 1vw;">Порода: <span class="montserrat"><?php echo $stroka["poroda"] ?></span></h1>
            <h1 class="mtv-1 mlv-1 bitter" style="font-size: 1vw;">Возраст: <span class="montserrat"><?php echo $stroka["age"] ?></span></h1>
            <h1 class="mtv-1 mlv-1 bitter" style="font-size: 1vw;">Пол: <span class="montserrat"><?php echo $stroka["gender"] ?></span></h1>
            <h1 class="mtv-1 mlv-1 bitter" style="font-size: 1vw;">Описание: <span class="montserrat"><?php echo $stroka["text"] ?></span></h1>
            <h1 class="mtv-1 mlv-1 bitter" style="font-size: 1vw;">Болезни: <span class="montserrat"><?php echo $stroka["sick"] ?></span></h1>
            <?php 
              if ($_SESSION['id']!=null){
             ?>
            <button class="btn btn-success form-control mt-2 mb-3 montserrat" onclick="return location.href = '<?php echo "HEAD_priutit.php?id=".$stroka["id"]?>'">Приютить</button>
          <?php } ?>
          </div>
          <!-- конец Информация-->

        </div>
      </div>
      <!-- конец Первая карточка-->
      <?php  } ?>
      
    </div>
    <!-- конец Две карточки-->
  </div>
<!-- конец Тело -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>