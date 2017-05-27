function load(id) {
  var myAjax = new Ajax.Request(
         'getusersem.php',
         {
          method: 'post',
          asynchronous: false,
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
  alert(response.responseText);
}
