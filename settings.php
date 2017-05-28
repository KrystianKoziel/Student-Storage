<?php
  session_start();
  require_once "connect.php";

  $user_sem = $_POST['gsem'];
  $semestr = $_POST['semestr'];
  $haslo1 = $_POST['newpass1'];
  $haslo2 = $_POST['newpass2'];

  if($user_sem!=$semestr){
    $polaczenie->query("UPDATE studenci SET semestr=$semestr WHERE idstudenta=$_SESSION[id_studenta]");
  }
  if($haslo1!='' and $haslo2!='' and $haslo1 == $haslo2){
    $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
    $polaczenie->query("UPDATE studenci SET haslo='$haslo_hash' WHERE idstudenta=$_SESSION[id_studenta]");
  }
  header('Location: user.php');
 ?>
