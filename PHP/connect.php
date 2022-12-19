  <?php
  //Connect Informations
  $host = "127.0.0.1";
  $user = "root";
  $password = "RxXx22052002";
  $db = "faiimoveis";

  $cnx = new mysqli($host, $user, $password, $db);

  if (!$cnx) {
    //die("Connect Error: " . $cnx->connect_error);
    $cnxCol = "Red";
  } else {
      //echo "Connected! </br></br>";
      $cnx_status = "Connected";
    }

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


  </body>
</html>
