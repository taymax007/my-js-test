<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Javascript</title>
    <link rel="stylesheet" href="main.css">
    <script>
      function changeText(id) {
        id.innerHTML = "Wo!?";
      }
      function checkMe(){
        var cb = document.getElementById("checkbx");
        var meldung = document.getElementById("msg");
        if(cb.checked == true){
            meldung.style.display = "block";
        } else {
            meldung.style.display = "none";
        }
     } 
    </script>
  </head>
  <body>
    <h1 onclick="changeText(this)">Hi</h1>
    <br>
    <form>
      <input type="checkbox" id="checkbx" onclick="checkMe()">Hier klicken
      <div id="msg"><p>Hallo</p></div>
    </form>
  </body>
</html>
