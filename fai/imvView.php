<?php
  include "PHP/connect.php";
  include ""

  // if ($cnx) {
  //   echo "Connected </br>";
  // }
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="script/js.js"></script>
    <link rel="stylesheet" href="css\style.css">
    <title></title>
  </head>
  <body>
    <header id="mainHeader">
        <nav id="menu">
          <a id="menuLink" href="index.php">    <li class="menuItem redBg"> Home </li>   </a>
          <a id="menuLink" href="#locationSec"> <li class="menuItem">  Imóbiliaria </li> </a>
          <a id="menuLink" href="#">            <li class="menuItem"> Imóveis </li>      </a>
          <a id="menulink" href="#">            <li class="menuItem" id="adminBtn" onclick="showLoginForm()"> Admin </li> </a>
          <li id="loginFormDiv" class="menuItem">
            <form class="loginForm" action="admin.php" onsubmit="return login()" method="post" target="_blank">
              <input type="text" name="usrNm" value="" placeholder="Username" required>
              <input type="password" name="usrPswd" value="" placeholder="Password" required>
              <input class="loginBtn" type="submit" name="logSbmt" value="Login">
            </form>
          </li>
          <button class="menuItem grnBg rgtAl" onclick="showCont()"> Contact </button>
        </nav>
             <div id="contDiv">
               <!-- <h5 class="closeBtn" onclick="closeCont()">X</h5> -->
               <form id="contactForm" class="contactForm" action="PHP/formProcess.php" method="get">
                <h4> Nome </h4>                  <input id="conInp" type="text" name="cnName" value="" placeholder="Nome" required>
                <h4> Email </h4>                 <input id="conInp" type="email" name="cnEmail" value="" placeholder="Email" required>
                <h4> Telefone para Contato </h4> <input id="conInp" type="tel" name="cnPhone" value="" placeholder="Telefone/Celular" min="8" required>
                <h4> Interesse: </h4>            <input id="conInp" type="text" name="" value="" placeholder="">
                <input class="grnBg" id="sbmt" type="submit" name="cnSubmit" value="Enviar" placeholder="">
              </form>
            <div/>
           </div>
           <div class="contBg" id="bgBlack" onclick="closeCont()">
    </header>

    <div class="imvView">
      <h3 class="label"> Nº De Registro: </h3> <?php echo $ID; ?>

    </div>
  </body>
</html>
