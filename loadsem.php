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

     $zapytanie = "SELECT kierunek FROM studenci WHERE idstudenta=$id";
     $wynik = $polaczenie->query($zapytanie);
     $temp = $wynik->fetch_assoc();
     $kierunek = $temp['kierunek'];

     $zapytanie = "SELECT * FROM $wydzial WHERE kierunek='$kierunek' AND semestr=$sem";
     $wynik = $polaczenie->query($zapytanie);
     $ile_znalezionych = $wynik->num_rows;
     $str = '';
     for ($i=0; $i <$ile_znalezionych; $i++){
       $wiersz = $wynik->fetch_assoc();
       $str .= $wiersz['przedmiot']."\n";
     }
     echo rtrim($str);
   }
  ?>
