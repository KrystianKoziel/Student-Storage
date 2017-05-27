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
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
     <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css">


   </head>

   <body onload="load(<?php echo $_SESSION['id_studenta'] ?>)">
     <div class="menubar">
       <div class="mbutton" id="upload">Upload</div>
       <div class="mbutton" id="wyloguj"><a target="_top" href="logout.php">Wyloguj</a></div>
       <div class="mbutton" id="settb">Ustawienia</div>
       <script type="text/javascript">

        $(function() {
            $('#settb').click(function(e) {
                e.preventDefault();
                var dialog = $('<p>Are you sure?</p>').dialog({
                    buttons: {
                        "Yes": function() {alert('you chose yes');},
                        "No":  function() {alert('you chose no');},
                        "Cancel":  function() {
                            alert('you chose cancel');
                            dialog.dialog('close');
                        }
                    }
                });
            });
        });

    </script>
     </div>
     <div class="lista" id="idlista">
     </div>
   </body>
  </html>
