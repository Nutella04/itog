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
<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', 'mpit');
$query = mysqli_query($con, "SELECT * FROM zayavka_otlov WHERE id=". $_GET["id"]);
$stroka= $query->fetch_assoc(); 

?>

<!-- Тело -->

<div class="box-shadow-1 mx-auto" style="width: 34vw;background-color: white; border-radius: 1vw">
  <h2 class="mbv-2 text-center mtv-4">Регистрация чипированной дворовой собаки</h2>
  <div class="col-8 mx-auto mtv-4 text-center pb-4">
  <form action="HEAD_del_zayavka.php" method="POST" enctype="multipart/form-data">
    <input class="mtv-3 form-control" type="" placeholder="Нашедший" name="id_finder" value="<?php echo $stroka["id_finder"] ?>" style="display: none;">
    <input class="mtv-3 form-control" type="" placeholder="Заявка" name="id" value="<?php echo $stroka["id"] ?>" style="display: none;">
    <input class="mtv-3 form-control" type="" placeholder="Порода" name="poroda">
    <input class="mtv-3 form-control" type="" placeholder="Возраст" name="age">
    <select name="gender" class="mtv-3 form-control">
      <option selected>Пол</option>
      <option value="Кобель">Кобель</option>
      <option value="Сука">Сука</option>          
    </select>
    <textarea class="mtv-3 form-control" type="" placeholder="Описание" name="text"></textarea>
    <textarea class="mtv-3 form-control" type="" placeholder="Болезни" name="sick"></textarea>
    <input placeholder="Выбрать файл" class="mtv-2 mx-auto" type="file" name="file">
    <button class="btn btn-success form-control mtv-3">Зарегистрировать</button>

  </form>

    <button class="btn btn-danger form-control mt-2 mb-4" onclick="return location.href = 'zayavka_dvor.php'">Отмена</button>
    <button class="btn btn-warning form-control mt-2 mb-4" onclick="return location.href = '<?php echo "HEAD_delete_zayavka.php?id=".$stroka["id"] ?>'">Аннулировать заявку</button>
  </div>
</div>
<!-- конец Тело -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>