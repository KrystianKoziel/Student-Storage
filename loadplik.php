<?php
   require_once "connect.php";

   if($polaczenie->connect_errno!=0)
   {
     echo "Error: ".$polaczenie->connect_errno;
   }
   else
   {
     $id = $_POST['id'];
     $sem = $_POST['sem'];
     $zapytanie = "SELECT wydzial FROM studenci WHERE idstudenta=$id";
     $wynik = $polaczenie->query($zapytanie);
     $temp = $wynik->fetch_assoc();
     $wydzial = strtolower($temp['wydzial']);
     $str .= $wydzial."\n";
     $zapytanie = "SELECT kierunek FROM studenci WHERE idstudenta=$id";
     $wynik = $polaczenie->query($zapytanie);
     $temp = $wynik->fetch_assoc();
     $kierunek = $temp['kierunek'];
     $str .= $kierunek."\n";
    
     echo rtrim($str);
   }
  ?>
