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
                getSemestr(<?php echo $_SESSION['id_studenta'] ?>);
                var gsem = getsemres();
                var sett = '<form id="settform" action="settings.php" method="post">'
                +'Semestr:'
                +'<input type="hidden" value="'+gsem+'"id="gsem" name="gsem"/> '
                +'<select id="semestr" name="semestr" required>'
        						+'<option value= "1"';
                    if(gsem==1)
                      sett+=' selected';
                    sett+='> 1 </option>'
        						+'<option value= "2"';
                    if (gsem==2) {
                      sett+=' selected';
                    }
                    sett+='> 2 </option>'
        						+'<option value= "3"';
                    if (gsem==3) {
                      sett+=' selected';
                    }
                    sett+='> 3 </option>'
        						+'<option value= "4"';
                    if (gsem==4) {
                      sett+=' selected';
                    }
                    sett+='> 4 </option>'
        						+'<option value= "5"';
                    if (gsem==5) {
                      sett+=' selected';
                    }
                    sett+='> 5 </option>'
        						+'<option value= "6"';
                    if (gsem==6) {
                      sett+=' selected';
                    }
                    sett+='> 6 </option>'
        						+'<option value= "7"';
                    if (gsem==7) {
                      sett+=' selected';
                    }
                    sett+='> 7 </option>'
        				+'</select>'
                +'<input type="password" placeholder="Nowe hasło" name="newpass1" id="newpass1"/>'
                +'<input type="password" placeholder="Powtórz hasło" name="newpass2" id="newpass2"/>'
                +'</form>';
                var dialog = $(sett).dialog({
                    buttons: {
                        "Yes": function() {
                          document.getElementById("settform").submit();
                        },
                        "Cancel":  function() {
                            dialog.dialog('close');
                        }
                    },
                    modal: true
                });
            });
        });

    </script>
     </div>
     <div class="lista" id="idlista">
     </div>
   </body>
  </html>
