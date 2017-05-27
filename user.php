<?php
  session_start();
  $_SESSION['idstudenta'] = 2;
 ?>
<!DOCTYPE html>
 <html lang="pl">
   <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <title>Student Storage</title>
     <meta name="description" content="Student storage" />
     <meta name="keywords" content="student, storage" />

     <link rel="stylesheet" href="css/main.css" type="text/css" />
     <script type="text/javascript" src="prototype.js"></script>
     <script type="text/javascript" src="load.js"></script>
   </head>

   <body onload="load(<?php echo $_SESSION['idstudenta'] ?>)">
     <div class="menubar">
       <div class="mbutton" id="upload">Upload</div>
       <div class="mbutton" id="wyloguj">Wyloguj</div>
       <div class="mbutton">Ustawienia</div>
     </div>
     <div class="lista" id="idlista">
       <div class="przedmiot">Matematyka</div>
       <div class="przedmiot">Materiałoznawstwo</div>
       <div class="przedmiot">Informatyk</div>
       <div class="przedmiot">Fizyka</div>
       <div class="przedmiot">Języki i metody programowania</div>
       <div class="przedmiot">Podstawy Intensywnego Opierdalania</div>
     </div>
   </body>
  </html>
