<?php
    include('PHP/connect.php');


?>
<!DOCTYPE html>
<html lang="PT-BR" dir="ltr">
  <head>
    <meta charset="utf-8">

    <script type="text/javascript" src="script/js.js"></script>
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Fai Imóveis</title>
  </head>
  <body>
     <header id="mainHeader">
         <nav id="menu">
           <a id="menuLink" href="index.php">     <li class="menuItem redBg"> Home </li>   </a>
           <a id="menuLink" href="#locationSec">  <li class="menuItem">  Imóbiliaria </li> </a>
           <a id="menuLink" href="imvSearch.php"> <li class="menuItem"> Imóveis </li>      </a>
           <a id="menulink" href="#">             <li class="menuItem" id="adminBtn" onclick="showLoginForm()"> Admin </li> </a>
           <li id="loginFormDiv" class="menuItem">
             <form class="loginForm" action="admin.php" onsubmit="return(validate());" method="post" target="_blank">
               <input id="usernm" type="text" name="usrNm" value="" placeholder="Username" required>
               <input id="passwd" type="password" name="usrPswd" value="" placeholder="Password" required>
               <input class="loginBtn" type="submit" name="logSbmt" value="Login">
             </form>
           </li>
           <button class="menuItem grnBg rgtAl" onclick="showCont()"> Contato </button>
         </nav>
              <div id="contDiv">
                <!-- <h5 class="closeBtn" onclick="closeCont()">X</h5> -->
                <form id="contactForm" class="contactForm" action="PHP/formProcess.php" method="get">
                 <h4> Nome </h4>                  <input id="conInp" onkeyup="enC(this, 0)" type="text" name="cnName" value="" placeholder="Nome" required>
                 <h4> Email </h4>                 <input id="conInp" onkeyup="enC(this, 1)" type="email" name="cnEmail" value="" placeholder="Email" required>
                 <h4> Telefone para Contato </h4> <input id="conInp" onkeyup="enC(this, 2)" type="tel" name="cnPhone" value="" placeholder="Telefone/Celular" min="8" required>
                 <h4> Interesse: </h4>            <input id="conInp" onkeyup="enC(this, 3)" type="text" name="cnInter" value="" placeholder="">
                 <input class="grnBg" id="sbmt" type="submit" name="cnSubmit" value="Enviar" placeholder="">
               </form>
             <div/>
            </div>
            <div class="contBg" id="bgBlack" onclick="closeCont()">
     </header>
     <section id="mainSec">
       <header class="midHead">
         <img class="headBanner" src="images/banner3.png" alt="FAI Imoveis" onclick="showLoginForm()">
       </header>
       <div id="mainCont">
         <!-- Immobile Search -->
         <form class="imvSearch" action="imvSearch.php" method="post">
           <h2 id="imvSearch">Pesquise Por Um Imóvel</h2>
           <div class="imvSrc">
             <select class="imvSearchInps" name="">
               <option value="Aluguel"> Aluguel </option>
               <option value="Venda">   Venda   </option>
             </select>
             <select class="imvSearchInps" value="Tipo De Imóvel">
               <option value="Casa">        Casa        </option>
               <option value="Sobrado">     Sobrado     </option>
               <option value="Apartamento"> Apartamento </option>
               <option value="Terreno">     Terreno     </option>
             </select>
             <input id="bairro" class="imvSearchInps" onfocus="showList()" onfocusout="hideList()" type="search" name="" value="" placeholder="Cidade/Bairro">
             <input id="srcBtn" class="imvSearchInps" type="submit" name="" value="Pesquisar">
          </div>
          <ul id="bairrosL" class="bairrosL">
            <li class="srcItem" onmouseover="srcf(this)">Jardim Jabaquara</li>
            <li class="srcItem" onmouseover="srcf(this)">Americanópolis</li>
            <li class="srcItem" onmouseover="srcf(this)">Vila Mascote</li>
            <li class="srcItem" onmouseover="srcf(this)">Vila Santa Catarina</li>
          </ul>
         </form>

         <!-- imvsec -->
        <h6 class="imvDest"> Imóveis Em Destaque </h6>
          <table class="imvSec">
            <tr>
              <td>
                <div class="imv imv1 bord">
                  <div class="phs">
                    <div class="pArrow a">&#10094;</div>
                    <div class="pArrow b">&#10095;</div>
                    <img src="images/beautifulHouse" alt="#image">
                  </div>
                  <h6> 5421-/2019 </h6>
                  <h2 class="imvType color1"> Kitnet |</h2> <h2 class="tp">Apartamento</h2>
                  <h3 class="subType"></h3>
                  <div class="specRow"> <div class="icon ico1 inL"></div> <h5 id="bairro"> Vila Joaniza </h5> </div>
                  <div class="specRow"> <div class="icon ico2 inL"></div> <h5> Rua doutor nicolino falci </h5> </div>
                  <div class="specRow"> <div class="icon ico3 inL"></div> <h5> 2 vagas </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> 25m² </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> 47m² </h5> </div>
                </div>
              </td>
              <td>
                <div class="imv imv2 bord">
                  <div class="phs">
                    <div class="pArrow a">&#10094;</div>
                    <div class="pArrow b">&#10095;</div>
                    <img src="images/beautifulHouse" alt="#image">
                  </div>
                  <h6> </h6>
                  <h2 class="imvType color1"> </h2> <h2 class="tp"></h2>
                  <h3 class="subType"></h3>
                  <div class="specRow"> <div class="icon ico1 inL"></div> <h5 id="bairro"> </h5> </div>
                  <div class="specRow"> <div class="icon ico2 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico3 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> </h5> </div>
                </div>
              </td>
              <td>
                <div class="imv imv3 bord">
                  <div class="phs">
                    <div class="pArrow a">&#10094;</div>
                    <div class="pArrow b">&#10095;</div>
                    <img src="images/beautifulHouse" alt="#image">
                  </div>
                  <h6> </h6>
                  <h2 class="imvType color1"> </h2> <h2 class="tp"></h2>
                  <h3 class="subType"></h3>
                  <div class="specRow"> <div class="icon ico1 inL"></div> <h5 id="bairro"> </h5> </div>
                  <div class="specRow"> <div class="icon ico2 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico3 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> </h5> </div>
                </div>
              </td>
              <td>
                <div class="imv imv4 bord">
                  <div class="phs">
                    <div class="pArrow a">&#10094;</div>
                    <div class="pArrow b">&#10095;</div>
                    <img src="images/beautifulHouse" alt="#image">
                  </div>
                  <h6> </h6>
                  <h2 class="imvType color1"> </h2> <h2 class="tp"></h2>
                  <h3 class="subType"></h3>
                  <div class="specRow"> <div class="icon ico1 inL"></div> <h5 id="bairro"> </h5> </div>
                  <div class="specRow"> <div class="icon ico2 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico3 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> </h5> </div>
                  <div class="specRow"> <div class="icon ico4 inL"></div> <h5> </h5> </div>
                </div>
              </td>
            </tr>
          </table>
       </div>
     </section>
    <!--
      <h4 id="imLoc"> Localização Da Imobiliária </h4>
      <h5 id="imEnd"> Rua Antônio Gil, 591 - Jardim Alzira </h5>
      <div id="locationMap"></div>
    -->
      <script>
        var map;
        var marker;
        var icon;
        function initMap() {
          var latLng = {lat: -23.663594, lng: -46.670879};
          map = new google.maps.Map(document.getElementById('locationMap'), {
            center: latLng,
            zoom: 20
          });
          marker = new google.maps.Marker({
            position: latLng,
            map: map,

            title: "Fai Imóveis"
          });
        }
      </script>
      <!-- AIzaSyB_7I5n40TJJ-Natw3i0QJOKC-QqkxM4lo -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_7I5n40TJJ-Natw3i0QJOKC-QqkxM4lo&callback=initMap"
      async defer></script>

     <footer id="ftr">

     </footer>
  </body>
  <!--  -->
</html>
