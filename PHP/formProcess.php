<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Create Connection
      $host = "127.0.0.1";
      $DB = "faiimoveis";
      $usr = "root";
      $pswd = "RxXxdbX22052002";

      $cnx = mysqli_connect($host, $usr, $pswd, $DB);
      //Test Connection
      if (!$cnx) {
        die("connection_error: " .mysqli_connect_error());
      }
      // echo "</br> Connection Estabilished! </br>";

      //Contact Info
      $conName  = $_GET["cnName"];
      $conEmail = $_GET["cnEmail"];
      $conPhone = $_GET["cnPhone"];
      $conInter = $_GET["cnInter"];

      //Check Info
      // echo "Name: $conName </br>";
      // echo "Email: $conEmail </br>";
      // echo "Phone: $conPhone </br>";

      $sql = "INSERT INTO client_contact (Nome, Email, Telefone, Interesse) VALUES ('$conName', '$conEmail', '$conPhone', '$conInter')";

      if ($cnx->query($sql)) {
        // echo "Contacted!";
      } else {
        // echo "Error: " . $sql . $cnx->error;
      }

      $cnx->close();
    ?>

    <script type="text/javascript">
      window.location.href="../index.php";
    </script>
    <a href="../index.html">Return To Main Page</a>
  </body>
</html>
