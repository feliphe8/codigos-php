
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form>
      <input type="text" name="busca">
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>

<?php

if(isset($_POST["busca"]))
{
  //echo strip_tags($_POST["busca"], "<strong>");
  echo htmlentities($_POST["busca"]);
}

?>
