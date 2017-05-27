<?php
  session_start();

  if((!isset($_SESSION['logged'])) || ($_SESSION['logged'] != true)){
		header('Location: index.php');
		exit();
	}
 ?>
<!DOCTYPE html>
 <html lang="pl">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <title>Student Storage</title>
     <meta name="description" content="Student storage" />
     <meta name="keywords" content="student, storage" />

     <link rel="stylesheet" href="css/main.css" type="text/css" />
     <script type="text/javascript" src="prototype.js"></script>
     <script type="text/javascript" src="load.js"></script>
   </head>

   <body onload="load(<?php echo $_SESSION['id_studenta'] ?>)">
     <div class="menubar">
       <div class="mbutton" id="upload">Upload</div>
       <div class="mbutton" id="wyloguj"><a target="_top" href="logout.php">Wyloguj</a></div>
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
