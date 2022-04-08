<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="stylefront.css">
</head>
<body style="background-color: #F6FBFE">
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
    <div onclick="return location.href = 'signIn.php'" class="mtv-2 montserrat" style="margin-left: 28vw; position: absolute; right: 10vw">
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
    $queryUser = mysqli_query($con, "SELECT * FROM user WHERE id = ". $_SESSION['id']);
    $tablFind = mysqli_query($con, "SELECT * FROM animal_chip WHERE id_finder = ". $_SESSION['id']);
    $stroka= $queryUser->fetch_assoc();
 ?>


<!-- Тело -->
<!--Фон-->
<img src="img/prof.png" style="width: 100%; height: 100vh; position: static;">
<!--конец Фон-->

    <div class="position-prof d-flex">
      <!--Общий див-->
      <div class="col-12 mx-auto plv-2 ptv-2 border" style="background-color: white; border-radius: 0.4vw">
      
        <h2 class="text-center montserrat" style="font-size: 2.5vw"><?php echo $stroka["login"] ?></h2>

        <div class="row">
          <!-- Пользователь-->
          <div class="col-6 p-3 " >
            <!-- Инфа пользователь-->
            <div class="inf">
              <h5 class="prof_otstup_inf montserrat" style="font-size: 1.2vw;"> Ваши данные:</h5>
              <div class="pt-2 mtv-2 pb-1 border" style="border-radius: 0.2vw; background-color: white;">
                <h5 class="prof_otstup_inf mlv-2 montserrat" style="font-size: 1vw;"> Имя: <span><?php echo $stroka["name"] ?></span></h5>
              </div>
              <div class="pt-2 mtv-2 pb-1 border" style="border-radius: 0.2vw; background-color: white;">
                <h5 class="prof_otstup_inf mlv-2 montserrat" style="font-size: 1vw;"> Фамилия: <span><?php echo $stroka["surname"] ?></span></h5>
              </div>
              <div class="pt-2 mtv-2 pb-1 border" style="border-radius: 0.2vw; background-color: white;">
                <h5 class="prof_otstup_inf mlv-2 montserrat" style="font-size: 1vw;"> Отчество: <span><?php echo $stroka["otname"] ?></span></h5>
              </div>
              <div class="pt-2 mtv-2 pb-1 border" style="border-radius: 0.2vw; background-color: white;">
                <h5 class="prof_otstup_inf mlv-2 montserrat" style="font-size: 1vw;"> Телефон: <span><?php echo $stroka["phone"] ?></span></h5>
              </div>
              <div class="pt-2 mtv-2 pb-1 border" style="border-radius: 0.2vw; background-color: white;">
                <h5 class="prof_otstup_inf mlv-2 montserrat" style="font-size: 1vw;"> Скольким животным вы помогли: <span><?php echo $tablFind->num_rows ?></span></h5>
              </div>
              <button class="btn btn-success form-control mtv-2 redact montserrat">Редактировать</button>
            </div>
            <!-- конец Инфа пользователь-->

          <!--  РЕДАКТИРОВАНИЕ Инфа пользователь-->
            <div class="col-9 change mx-auto" style="display: none;">
              <form action="HEAD_redact.php" method="POST" enctype="multipart/form-data" >
                <input class="mt-1 form-control" type="" placeholder="Логин" name="login" value="<?php echo $stroka["login"] ?>">
                <input class="mt-1 form-control" type="" placeholder="Имя" name="name" value="<?php echo $stroka["name"] ?>">
                <input class="mt-1 form-control" type="" placeholder="Фамилия" name="surname" value="<?php echo $stroka["surname"] ?>">
                <input class="mt-1 form-control" type="" placeholder="Отчество" name="otname" value="<?php echo $stroka["otname"] ?>">
                <input class="mt-1 form-control" type="" placeholder="Телефон" name="phone" value="<?php echo $stroka["phone"] ?>">
                
                <button class="btn btn-success form-control mt-3 montserrat">Изменить</button>
              </form>
              <button class="btn btn-danger form-control mt-1 mb-4 otmena montserrat">Отмена</button>
            </div>
            <!-- конец РЕДАКТИРОВАНИЕ Инфа пользователь-->
          </div>
          <!-- конец Пользователь-->

          
          <?php 
          $queryAnimals = mysqli_query($con, "SELECT * FROM animal_chip WHERE id_owner = ". $_SESSION['id']);
          $tabl = mysqli_query($con, "SELECT * FROM animal_chip WHERE id_owner = ". $_SESSION['id']); 
          ?>
          <!-- Список питомцев-->
          <div class="col-6 text-center">
            <h3 class="text-center ptv-3 montserrat" style="font-size: 1.2vw;">Ваши питомцы:(<span> <?php echo $tabl->num_rows  ?> </span>)</h3>
            <?php 
                if ($tabl->num_rows > 0) {
             ?>
            <!-- Карусель с питомцами-->
            <div class="border mx-auto pt-3 pb-3" style="width: 90%; margin-left: 5%; border-radius: 0.2vw; background-color: white;">
              <div id="carouselExampleControls" class="carousel slide col-8 mx-auto" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <?php 
                      for ($i=0; $i < $tabl->num_rows; $i++) { 
                      $animals = $queryAnimals->fetch_assoc();
                       ?>
                  <div class="carousel-item <?php if ($i==0){ echo 'active'; } ?>">
                    <div class="w-100" style="padding-top: 75%; background-image: url(<?php echo $animals["img1"]; ?>); background-size: cover">
                    </div>
                  </div>
                <?php }?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>  
            </div>
            
            <!-- конец Карусель с питомцами-->
            <?php  }


            else{?>
            <!-- У чела нет питомцев-->
            <h4 class="text-center montserrat">У вас нет питомцев</h4>
            <img src="img/sad.jpeg" class="w-75 ">

            <!-- конец У чела нет питомцев-->
            <?php  }?>
            <!-- конец Карусель с питомцами-->
            <button class="btn btn-success col-11 mtv-2 chip montserrat">Подать заявку на чипирование питомца</button>

          </div>
          <!-- конец Список питомцев-->

          <!--Заявка на чипирование-->
          <div class="box-shadow-1 position-regis zayavka_chip pb-4" style="width: 34vw; background-color: white; border-radius: 1vw; display: none;">

            <h2 class="mbv-2 text-center mtv-4 montserrat" style="font-size: 1.5vw;">Введите данные питомца</h2>
            <div class="col-8 mx-auto mtv-4 text-center">
              <form action="HEAD_zayavka_chip.php" method="POST" enctype="multipart/form-data">
                <input class="mt-2 form-control" type="" placeholder="Порода" name="poroda">
                <input class="mt-2 form-control" type="" placeholder="Возраст" name="age">
                <select name="gender" class="mt-2 form-control">
                  <option selected>Пол</option>
                  <option value="Кобель">Кобель</option>
                  <option value="Сука">Сука</option>          
                </select>
                <textarea class="mt-2 form-control" type="" placeholder="Описание" name="text"></textarea>
                <textarea class="mt-2 form-control" type="" placeholder="Болезни" name="sick"></textarea>
                <input placeholder="Выбрать файл" class="mt-2 mx-auto" type="file" name="file">
                <button class="btn btn-success form-control mt-3 montserrat">Отправить</button>
              </form>
              <button class="btn btn-danger form-control mt-2 otmena2 montserrat">Отмена</button>
            </div>
          </div>
          <!--конец Заявка на чипирование-->


      <!--конец Общий див-->
    </div>

	
<!-- конец Тело -->




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    let redact = document.querySelector(".redact");
    let otmena = document.querySelector(".otmena");
    let change = document.querySelector(".change");
    let inf = document.querySelector(".inf");

    let chip = document.querySelector(".chip");
    let otmena2 = document.querySelector(".otmena2");
    let zayavka_chip = document.querySelector(".zayavka_chip");


    redact.onclick = function(){
      inf.style.display = "none";
      change.style.display = "block";
    }
    otmena.onclick = function(){
      change.style.display = "none";
      inf.style.display = "block";
    }

    chip.onclick = function(){
      zayavka_chip.style.display = "block";
    }
    otmena2.onclick = function(){
      zayavka_chip.style.display = "none";
    }
  </script>
</body>
</html>