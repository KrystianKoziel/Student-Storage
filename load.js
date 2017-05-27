function load(id) {
  var myAjax = new Ajax.Request(
         'getusersem.php',
         {
          method: 'post',
          asynchronous: true,
          parameters: "id=" + id,
          onComplete: loadsem,
          onFailure: showAlert
       });
}
function loadsem(id,sem) {
  var myAjax = new Ajax.Request(
         'loadsem.php',
         {
          method: 'post',
          asynchronous: true,
          parameters: {"id=" + id, "sem="+sem},
          onComplete: loadsem,
          onFailure: showAlert
       });
}
function showAlert(MyRequest) {
   alert("Operacja nie powiodła się");
}
