<!DOCTYPE html>
 <html lang="pl">
   <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <title>Student Storage</title>
     <meta name="description" content="Student storage" />
     <meta name="keywords" content="student, storage" />

     <link rel="stylesheet" href="css/main.css" type="text/css" />
   </head>

   <body>
     <div class="menubar">
       <div class="mbutton" id="upload">Upload</div>
       <div class="mbutton" id="wyloguj">Wyloguj</div>
       <div class="mbutton">Ustawienia</div>
	   <div style="clear:both;"></div>
     </div>
	 <h1 class="title">Pobierz Pliki</h1>
	<div class="menubar">
       <div class="mbutton" id="down1">Pobierz</div>
       <div class="mbutton" id="down2">Pobierz wszystkie</div>
	   <div style="clear:both;"></div>
     </div>
     <div class="lista_plikow">
	 <div class="Title">
	  </div>
	  <h1 class="title">Lista plików</h1>
	  <div class="prze_pliki">
		<table>
			<tr>
			<th></th>
				<th>Nazwa pliku</th>
			<th>Waga</th>
				<th>typ</th>
				
			</tr>
				<?php
                 $katalog = './upload/';
                 $pliki = scandir($katalog);
                 $licznik = 1;
                 foreach ($pliki as $plik) {
                   if ($plik!='.' && $plik!='..') {
                     $exten = pathinfo($plik);
                     $size = filesize($katalog.'/'.$plik);
                     echo "<tr><td><input type='checkbox'></td><td><a href='pobierz.php?file=".$plik."'>".$exten['filename']."</a></td><td>".$size."KB</td><td>".$exten['extension']."</td></tr>";
                     $licznik++;
                   }
                 }
                ?>		
		</table>
	  
	  </div>
	  </div>
     </div>
   </body>
  </html>
