function load(id) {
  var myAjax = new Ajax.Request(
         'getusersem.php',
         {
          method: 'post',
          asynchronous: true,
          parameters: "id=" + id,
          onComplete: function(response) {
            loadsem(id,response);
          },
          onFailure: showAlert
       });
}
function loadsem(id, sem) {
  var myAjax = new Ajax.Request(
         'loadsem.php',
         {
          method: 'post',
          asynchronous: true,
          parameters: "id=" + id + "&" + "sem=" + sem.responseText,
          onComplete: complete,
          onFailure: showAlert
       });
}
function showAlert(MyRequest) {
   alert("Operacja nie powiodła się");
}
function complete(response){
  var lista = document.getElementById("idlista");
  var wyniki = response.responseText.split("\n");
  lista.innerHTML='';
  for(i=0; i < wyniki.length; i++){
     var przedmiot = '<div class="przedmiot" onclick="#" >'+ wyniki[i] + '</div>';
     lista.innerHTML += przedmiot;
   }
}
function loadsub(id, sem) {
  var myAjax = new Ajax.Request(
         'loadsem.php',
         {
          method: 'post',
          asynchronous: true,
          parameters: "id=" + id + "&" + "sem=" + sem,
          onComplete: function(response) {
          retsub(id, sem, response) ;
        },
          onFailure: showAlert
       });
}
function loadPliki(id, sem, przedmiot) {
    var myAjax = new Ajax.Request(
          'loadplik.php',
           {
            method: 'post',
           asynchronous: true,
           parameters: "id=" + id + "&" + "sem=" + sem,
            onComplete: function(response) {
           retPlik( sem, response, przedmiot) ;
         },
            onFailure: showAlert
         });
}
function retsub(id, sem, response){
  var a = 's'+sem;
  var lista = document.getElementById(a);
  var wyniki = response.responseText.split("\n");
  lista.innerHTML='';
  for(i=0; i < wyniki.length; i++){
    var przedmiot = '<a target="main" href="download.php" onclick="loadPliki('+id+', '+sem+ ','  +wyniki[i] + ')" >' + wyniki[i] +'</a> ';
      lista.innerHTML += przedmiot;
   }
}
var semestrres = 0;
function getSemestr(id) {
  var myAjax = new Ajax.Request(
         'getusersem.php',
         {
          method: 'post',
          asynchronous: false,
          parameters: "id=" + id,
          onComplete: function(response) {
            semestrres = response.responseText;
          },
          onFailure: showAlert
       });
}
function getsemres() {
  return semestrres;
}
function upload(){
		var input = document.getElementById("filesToUpload");
		input.click();
}
function retPlik(sem, response, przedmiot) {
       var s = response.responseText.split("\n");
       var a ='pliki/'+ s[0]+'/'+s[1]+'/'+sem+'/'+przedmiot;
       var table = document.getElementById("idlista");
       var string = "<table><td><tr>Nazwa pliku</tr><tr>Rozmiar</tr><tr>Typ</tr></td>";
       string += `
       <?php
 	     $dir = "`;
       string += a;
        string += ` $files = scandir($dir);
 	       foreach ($files as $file)
 	        {
 		          if (!in_array($file,array(".","..")))
 		            {
 			               $size = filesize($dir.'/'.$file);
 			                  $size = round($size / 1024);
 			                     $exten = pathinfo($file);
 			                        echo "<tr><td><a href='download.php?file=".$file."'>".$exten['filename']."</a></td><td>".$size."KB</td><td>".$exten['extension']."</td>	</tr>"";
 		            }
 	        }
       ?>
       `;
       string += "</table>";
       table.innerHTML = string;
  }
