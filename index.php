<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
<script>
function p1(){
var result  = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 5; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   
document.getElementById("tekst1").value+=result;

}

function p2(){
var result  = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 5; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   
document.getElementById("tekst2").value+=result;

}
function p3(){
var result  = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 5; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   
document.getElementById("tekst3").value+=result;

}

function wypisz(){

document.write(okno1);

}

    </script>

  </head>
  <body>
    <form action="a.php" method="POST">
<input id="tekst1" type="text" name="pierw"></input>
<input id="tekst2" type="text" name="drug"></input>
<input id="tekst3" type="text" name="trz"></input>
<input  type="submit"></input>
</form>

<button onclick="p1();">

</button>
<button onclick="p2();">

</button>
<button onclick="p3();">

</button>


  </body>
</html>
