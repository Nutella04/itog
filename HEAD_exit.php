<?php session_start() ?>
<?php 
$_SESSION["id"] = null;
header('Location: index.php');
 ?>