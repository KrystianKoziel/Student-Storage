<?php
   session_start();

   session_unset();
   echo '<script type="text/javascript" src="load.js">',
     'wyloguj();',
     '</script>';
   header('Location: main.php');
  ?>
