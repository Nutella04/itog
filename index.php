<?php session_start()  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="stylefront.css">
</head>
<body>
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
    <div onclick="return location.href = 'signIn.php'" class="mtv-2 montserrat" style="position: absolute; right: 11vw">
      <h1 class="header-text-1">Вход</h1>
    </div>
    <div onclick="return location.href = 'reg.php'" class="mtv-2 montserrat" style="position: absolute; right: 1vw">
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

  <!-- тело -->
  <div class="" style="">
    <!-- задний фон -->
    <img src="img/Background.png" style="width: 100%; position: static;">
    <!-- call-center -->
    <div class="position-call-center mx-auto" style="width: 31%">
      <!-- номер центра связи -->
      <div style="background-color: #FF6A6A; height: 3.8vw; width: 100%; border-radius: 0.5vw">
        <h2 style="font-size: 2.1vw; color: white; text-align: center;" class="ptv-2 bitter">
          Центр связи: 1234567890
        </h2>
      </div>
      <!-- текст описание -->
      <div style="width: 100%;" class="mtv-3">
        <h2 style="font-size: 1.6vw; text-align: center;" class="montserrat">
        Если вы обнаружили бродячую собаку,которая агрессивно себя ведёт, или стаю бродячих собак, то просим сообщить нам об этом через звонок или через онлайн заявку
      </h2>
      </div>
      <!-- кнопка сообщить -->
      <div class="text-center mtv-3 zayavka_button ptv-1 pbv-1" style="margin-left: 1.3vw; border-style: solid; border-radius: 0.5vw;">
        <h1 style="font-size: 1.7vw; margin-top: 0.2vw; margin-bottom: 0.2vw;" class="montserrat">Сообщить о местонахождении</h1>
      </div>
    </div>
    <!-- info -->
    <div class="position-info d-flex" style="">
      <div style="margin-left: 8vw; width: 40vw;">
        <!-- 1 -->
        <div class="border d-flex mtv-2" style="background-color: white; border-radius: 0.4vw">
          <img src="img/news2.jpg" style="width: 6vw; height: 6vw;" class="mlv-2 mtv-2 mbv-2 border">
          <div>
            <h1 class="montserrat mtv-2 mlv-1 mrv-1" style="font-size: 0.9vw; font-weight: bold">
              ВРЕМЕННЫЙ ППБЖ В ЯКУТСКЕ ПЛАНИРУЮТ ЗАКРЫТЬ В МАРТЕ
            </h1>
            <h1 class="montserrat mlv-1 mrv-1" style="font-size: 0.7vw">
              Временный пункт передержки безнадзорных животных, открытый по улице Автодорожная, 1/4 в столице республики, планируют закрыть...
            </h1>
          </div>
        </div>
        <!-- 3 -->
        <div class="border d-flex mtv-2" style="background-color: white; border-radius: 0.4vw">
          <img src="img/news4.jpg" style="width: 6vw; height: 6vw;" class="mlv-2 mtv-2 mbv-2 border">
          <div>
            <h1 class="montserrat mtv-2 mlv-1 mrv-1" style="font-size: 0.9vw; font-weight: bold">
              Евгений Григорьев: Пункт передержки расширят для содержания 2000 собак
            </h1>
            <h1 class="montserrat mlv-1 mrv-1" style="font-size: 0.7vw">
             Пункт передержки безнадзорных животных в столице республики будет расширен до двух тысяч мест, передает телеканал «Якутия 24», ссылаясь...
            </h1>
          </div>
        </div>
        <!-- 5 -->
        <div class="border d-flex mtv-2" style="background-color: white; border-radius: 0.4vw">
          <img src="img/news5.5.jpg" style="width: 6vw; height: 6vw;" class="mlv-2 mtv-2 mbv-2 border">
          <div>
            <h1 class="montserrat mtv-2 mlv-1 mrv-1" style="font-size: 0.9vw; font-weight: bold">
              Безопасность на первом месте: в Якутске более 6 тысяч бездомных собак
            </h1>
            <h1 class="montserrat mlv-1 mrv-1" style="font-size: 0.7vw">
              ИА SakhaNews. Мэр Якутска Евгений Григорьев на совещании Минвостокразвития по вопросу об обеспечении безопасности граждан...
            </h1>
          </div>
        </div>
      </div>
      <div style="margin-left: 4vw; width: 40vw;">
        <!-- 2 -->
        <div class="border d-flex mtv-2" style="background-color: white; border-radius: 0.4vw">
          <img src="img/news3.jpg" style="width: 6vw; height: 6vw;" class="mlv-2 mtv-2 mbv-2 border">
          <div>
            <h1 class="montserrat mtv-2 mlv-1 mrv-1" style="font-size: 0.9vw; font-weight: bold">
              В районе ипподрома Якутска снова заметили бродячих собак
            </h1>
            <h1 class="montserrat mlv-1 mrv-1" style="font-size: 0.7vw">
              Читатели сообщают, что в районе ипподрома Якутска снова были замечены собаки. Соседи сразу вызвали службу отлова и на всякий случай...
            </h1>
          </div>
        </div>
        <!-- 4 -->
        <div class="border d-flex mtv-2" style="background-color: white; border-radius: 0.4vw">
          <img src="img/news5.jpg" style="width: 6vw; height: 6vw;" class="mlv-2 mtv-2 mbv-2 border">
          <div>
            <h1 class="montserrat mtv-2 mlv-1 mrv-1" style="font-size: 0.9vw; font-weight: bold">
              Безопасность на первом месте: в Якутске более 6 тысяч бездомных собак
            </h1>
            <h1 class="montserrat mlv-1 mrv-1" style="font-size: 0.7vw">
              ИА SakhaNews. Мэр Якутска Евгений Григорьев на совещании Минвостокразвития по вопросу об обеспечении безопасности граждан...
            </h1>
          </div>
        </div>
        <!-- 6 -->
        <div class="border d-flex mtv-2" style="background-color: white; border-radius: 0.4vw">
          <img src="img/news6.jpg" style="width: 6vw; height: 6vw;" class="mlv-2 mtv-2 mbv-2 border">
          <div>
            <h1 class="montserrat mtv-2 mlv-1 mrv-1" style="font-size: 0.9vw; font-weight: bold">
              Евгений Григорьев: Решение вопроса с безнадзорными собаками требует времени и огромных бюджетных средств
            </h1>
            <h1 class="montserrat mlv-1 mrv-1" style="font-size: 0.7vw">
              YAKUTIA.INFO. Глава Якутска ответил на вопросы по безнадзорным животным, о том, сколько уже отловлено, сколько из них все-таки...
            </h1>
          </div>
        </div>
      </div>
    </div>
    <?php  if ($_SESSION['id']!=null) {?>
    <!-- Заявка на отлов для рег -->
    <div class="zayavka_block position-otlov box-shadow-1 text-center ptv-2 pb-4" style="width: 40%; background-color: white; display: none; border-radius: 0.5vw;">
      <h1 class="text-center mtv-2" style="font-size: 1.9vw; font-family: Arial;">Заявка на отлов собак</h1>
      <div class="col-8 mx-auto">
        <form action="HEAD_zayavka_otlov.php" method="POST" enctype="multipart/form-data" class="text-center">
          <input class="mtv-3 form-control" type="" placeholder="Количество" name="kolvo">
          <textarea class="mtv-2 form-control" type="" placeholder="Описание каждой собаки" name="text"></textarea>
          <input class="mtv-2 form-control" type="" placeholder="Местонахождение" name="adres">
          <p class="mtv-2 mbv-1" style="font-size: 0.8vw;">Если есть фото, просим прикрепить его</p>
          <input placeholder="Выбрать файл" class="mtv-0 mx-auto" type="file" name="file">
          <button class="btn btn-success form-control mtv-2">Отправить заявку</button>
        </form>
        <button class="btn btn-danger form-control mtv-2 otmena_zayavka">Отмена</button><br>
      </div> 
    </div>
    <?php } else{?>
    <!-- Заявка на отлов для нерег -->
    <div class="zayavka_block position-otlov box-shadow-1 mx-auto text-center" style="height: 16vw; width: 34%; background-color: white; border-radius: 0.5vw; display: none">
      <h6 style="font-size: 1.7vw; text-align: center;" class="mtv-4 montserrat">Вы не вошли в аккаунт, просим вас пройти регистрацию или войти в профиль.</h6>
        <button class="btn btn-danger mtv-3 mbv-2 col-8 otmena_zayavka">Отмена</button><br>
        <a href="reg.php" class="text-dark" style="font-size: 1vw">Регистрация</a><br>
        <a href="signIn.php" class="text-dark mbv-1" style="font-size: 1vw">Войти</a>
    </div>
    <?php } ?>

    <!-- Футер -->
    <div style="height: 25vh; background-color: #99D7FF; width: 100%; padding-top: 2.5vw" class="d-flex">
      <div class="col-4 ptv-4" style="margin-left: 8vw">
        <h1 class="montserrat" style="font-size: 1.5vw; font-weight: bold">
          © MISHKA, 2022 
        </h1>
        <h1 class="montserrat mtv-4" style="font-size: 1.2vw;">
          Политика обработки персональных данных
        </h1>
        <h1 class="montserrat mtv-3" style="font-size: 1.2vw;">
          Условия использования
        </h1>
      </div>
      <div class="col-4 ptv-4" >
        <h1 class="montserrat" style="font-size: 1.5vw; font-weight: bold">
          Контакты
        </h1>
        <h1 class="montserrat mtv-4" style="font-size: 1.2vw;">
          8 800 ***-**-**
        </h1>
        <h1 class="montserrat mtv-3" style="font-size: 1.2vw;">
          г. Якутск, ул. Ломоносова, д.37/1 
          arostik4@mail.ru
        </h1>
      </div>
      <div class=" ptv-4" >
        <h1 class="montserrat" style="font-size: 1.5vw; font-weight: bold">
          Следите за нами
        </h1>
        <div class="d-flex mtv-4">
          <img src="img/vk.png" class="mrv-4" style="height: 3vw; width: 3vw">
          <img src="img/tw.png" class="mlv-4 mrv-4" style="height: 3vw; width: 3vw">
          <img src="img/fb.png" class="mlv-4 " style="height: 3vw; width: 3vw">
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    let zayavka_button = document.querySelector(".zayavka_button");
    let otmena = document.querySelector(".otmena_zayavka");
    let zayavka_block = document.querySelector(".zayavka_block");


    zayavka_button.onclick = function(){
      zayavka_block.style.display = "block";
    }
    otmena.onclick = function(){
      zayavka_block.style.display = "none";
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>