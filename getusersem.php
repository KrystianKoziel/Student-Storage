<?php
   require_once "connect.php";

   if($polaczenie->connect_errno!=0)
   {
     echo "Error: ".$polaczenie->connect_errno;
   }
   else
   {
     $search = $_POST['id'];
     $zapytanie = "SELECT semestr FROM studenci WHERE idstudenta=$search";
     $wynik = $polaczenie->query($zapytanie);
    //  $ile_znalezionych = $wynik->num_rows;
     $temp = $wynik->fetch_assoc();
     $str = $temp['semestr'];
    //  for ($i=0; $i <$ile_znalezionych; $i++){
    //    $wiersz = $wynik->fetch_assoc();
    //    $str .= $wiersz['semestr']."\n";
    //  }
     echo rtrim($str);
   }
  ?>
