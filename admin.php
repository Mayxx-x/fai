	<?php
    session_start();

    if(!empty($_POST["usrNm"])) {
        $_SESSION["user"] = $_POST["usrNm"];
        $_SESSION["passwd"] = $_POST["usrPswd"];
    } else {
        echo "<body style='align-content: ;display: grid;'><div style='margin: 30 auto;'> Falha ao iniciar sessão </div> <br/>";
        echo "<button onclick=window.location.href='index.php' style='margin: auto;padding: 10;'> Voltar";
        exit();
    }

	include('php/connect.php');

    $Idd = "39";

	$qRows = "nreg, imvTp, subTp, subTp, end, numero, bairro, imediacoes, descricao, comp, cep, quartos, sala, cozinha, wc, vagas, adicionais, chaves, garantias, condicoes, aUtil, aTotal, excl, iptu, casasquant, accanim, aguaind, luzind, placa, fotos, prop, propT, propE, obs, captador, corretor, preenchPor, valor";
	
    $selQ = "SELECT $qRows FROM faiimoveis.imoveis WHERE nreg = ?";
    /*
	$stmt = $cnx->prepare($selQ);
	$stmt->bind_param("i", $Idd);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($ynreg, $yimvTp, $ysubTp, $ysubTp, $yend, $ynumero, $ybairro, $yimediacoes, $ydescricao, $ycomp, $ycep, $yquartos, $ysala, $ycozinha, $ywc, $yvagas, $yadicionais, $ychaves, $ygarantias, $ycondicoes, $yaTotal, $yaUtil, $yexcl, $yiptu, $ycasasquant, $yaccanim, $yaguaind, $yluzind, $yplaca, $yfotos, $yprop, $ypropT, $ypropE, $yobs, $ycaptador, $ycorretor, $ypreenchPor, $yvalor);
	$stmt->fetch();
    */
	$cnx->close();
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="script/js.js"></script>
	<script type="text/javascript" src="script/imvRegF.js"></script>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/adminpage.css"/>
    <title></title>
  </head>
  <body id="mainbody">
    <div class="topMenu">
      <div class="adminLabel"> <h4 class="plusSize">A</h4><h4 onclick="writeIn()">dmin</h4> </div>
			<div class="backSt"> <a href="index.php"> Voltar ⌂ </a> </div>
      <div class="" style="display: inline-block; margin: 0 50px;"> <?php echo date("d/m/y"); ?> </div>
      <div class="con"> <h5 id="status"> <?php echo "$cnx_status:  "; ?> </h5> <div id="ind" class="cnxInd"> </div> </div>
      <div id="con"> <?php 	?> </div>
      <!-- <button type="button" name="button" onclick="getRegs()">Click For Call</button> -->
    </div>
    <div class="destImv" style="">
      <div class="imvSecManage">
        <!-- 1/2/3/4/5/6/7/8 Editor -->
        <form class="btnsForm" action="index.html" method="post">
          <table>
            <th> imv </th><th></th>
            <tr>
              <td><button class="selBtn" type="button" name="" onclick="editImv(1)">1</button></td>
              <td><button class="selBtn" type="button" name="" onclick="editImv(2)">2</button></td>
              <td><button class="selBtn" type="button" name="" onclick="editImv(3)">3</button></td>
              <td><button class="selBtn" type="button" name="" onclick="editImv(4)">4</button></td>
            </tr>
            <tr>
              <td><button class="selBtn" type="button" name="" onclick="editImv(5)">5</button></td>
              <td><button class="selBtn" type="button" name="" onclick="editImv(6)">6</button></td>
              <td><button class="selBtn" type="button" name="" onclick="editImv(7)">7</button></td>
              <td><button class="selBtn" type="button" name="" onclick="editImv(8)">8</button></td>
            </tr>
          </table>
        </form>

        <!-- Immobiles ImvSec Editor -->
        <form class="submitForm" method="post">
          <div id="editor" class="editor">
            <div class="phoEdit">
              <button class="imageUp" type="button" name="button"> Upload New Image </button>
              <div class="phoCont">
                <div class="imvPho 1"></div>
                <div class="imvPho 2"></div>
                <div class="imvPho 3"></div>
                <div class="imvPho 4"></div>
                <div class="imvPho 5"></div>
              </div>
            </div>
              <div class="rgtSdSpecs"> <!-- Left Side Specs -->
                <div class="specRowEdit"> ID:           </div> <input class="" type="number" name="ID">
                <div class="specRowEdit imvType"> Tipo: </div> <input class="" type="text" name="tp" value="">
                <div class="specRowEdit"> Área (M²):    </div> <input class="" type="number" name="area" value="">
                <div class="specRowEdit"> Número(End.): </div> <input class="" type="number" name="num" value="">
                <div class="specRowEdit"> CEP:          </div> <input class="" type="text" name="CEP" value="" min="8" maxlenght="8">
                <div class="specRowEdit"> Valor:        </div> <input class="" type="number" name="value" value="">
                <div class="specRowEdit"> Proprietário: </div> <input class="" type="text" name="owner" value="">
                <div class="imvActual_info">
                   <div class="bmlk tt">Painel Selecionado: </div> <div id="num_id" class="pn_id"> Nenhum Selecionado </div>
                </div>
                <input id="panelNum" type="number" name="panelNum" value="">
              </div>
              <div id="specRows"> <!-- Right Side Specs -->
                <div class="specRowEdit"> Rua/Avenida:  </div> <input class="" type="text" name="strt" value="">
                <div class="specRowEdit"> Bairro:       </div> <input class="" type="text" name="neigh" value="">
                <div class="specRowEdit"> Quartos:      </div> <input class="" type="text" name="rooms" value="">
                <div class="specRowEdit"> Banheiros:    </div> <input class="" type="text" name="bathr" value="">
                <div class="specRowEdit"> Vagas:        </div> <input class="" type="text" name="gar" value="">
                <div class="sbmtBtn"> <input class="buttonSbmt" type="submit" name="" value="Enviar"> </div>
              </div>
          </div>
        </form>
      </div>
    </div>

    <div id="regBtn" class="regBtn" onclick="imvReg(this)"> Registrar Novo Imóvel </div>

    <div name="imvReg" id="newImv" class="imvReg fadeIn"> <!-- Registro Imóve1 -->
      <form id="imvReg" method="post" action="adminPage_process.php">
        <div class="regCol col1">
          <div class="regSpec"> ID/ Nº Referencia: <input class="regInp" type="text" placeholder="00000/Ano" name="regid" value="" max="15"> </div>
          <div class="regSpec"> Tipo: <!-- First Select -->
            <select class="imvSel" name="imvTp">
              <option value="aluguel" id="opt">Aluguel</option>
              <option value="venda" id="opt">Venda</option>
              <option value="renda" id="opt">Renda</option>
              <option value="terreno" id="opt">Terreno</option>
            </select>
          </div>
          <div class="regSpec"> Tipo Imóvel: <!-- Second Select -->
            <select class="imvSel" name="imvTp2">
              <option value="Casa" id="opt">Casa</option>
              <option value="Apartamento" id="opt">Apartamento</option>
              <option value="Terreno" id="opt">Terreno</option>
            </select>
          </div>
          <div class="regSpec"> Sub-Tipo:                 <input class="regInp" type="text" name="subTp" value="" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Valor Aluguel:            <input class="regInp" type="text" name="imvValorA" value="" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Valor Venda:              <input class="regInp" type="text" name="imvValorV" value="" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Área Total:               <input class="regInp" type="text" placeholder="---M²" name="aTotal" value="" max="15" onkeyup="changeText(this, 'area')"> </div>
          <div class="regSpec"> Área Útil:                <input class="regInp" type="text" placeholder="---M²" name="aUtil" value="" max="10" onkeyup="changeText(this, 'area')"> </div>
          <div class="fwLine"></div>
          <div class="regSpec"> Nome Do Proprietário:     <input class="regInp" type="text"      placeholder="" name="owner" value="" max="15" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Telefone Do Proprietário: <input class="regInp" type="text"      placeholder="" name="ownTel" value="" max="15" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Email Do Proprietário:    <input class="regInp" type="text"      placeholder="" name="ownEmail" value="" max="15" onfocusout=""> </div>
          <div class="regSpec"> Chaves:                   <input class="regInp" type="textarea"  placeholder="" name="chaves" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Garantias Aceitas:        <input class="regInp" type="textarea"  placeholder="" name="garantias" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Condiçoes De Pgto.:       <input class="regInp" type="textarea"  placeholder="À Vista, Financiado..." name="cond" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> IPTU:                     <input class="regInp" type="textarea"  placeholder="" name="iptu" value="" max="50" onfocusout="changeText(this)"> </div>

          <div class="regSpec"> Casas No Quintal:         <input class="regInp" type="textarea"  placeholder="" name="casas" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Captador:                 <input class="regInp" type="textarea"  placeholder="" name="cap" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Corretor:                 <input class="regInp" type="textarea"  placeholder="" name="corretor" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Preenchido Por:           <input class="regInp" type="textarea"  placeholder="" name="preenchPor" value="" max="50" onfocusout="changeText(this)"> </div>
        </div>
        <div class="regCol col2">

          <div class="regSpec"> Endereço:            <input class="regInp" type="textarea"  placeholder="" name="endereco" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Número:              <input class="regInp" type="textarea"  placeholder="" name="numero" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Bairro:              <input class="regInp" type="textarea"  placeholder="" name="bairro" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Imediações:          <input class="regInp" type="textarea"  placeholder="" name="imed" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Complemento:         <input class="regInp" type="textarea"  placeholder="" name="comp" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> CEP:                 <input class="regInp" type="textarea"  placeholder="" name="cep" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec desc"> Descrição Do Imóvel: <input class="regInp desc" type="textarea"  placeholder="" name="imvdesc" value="" max="50" onfocusout="changeText(this)"> </div>
          <div class="regSpec"> Obs:                 <input class="regInp" type="textarea"  placeholder="" name="obs" value="" max="50" onfocusout="changeText(this)"> </div>

          <div class="fwLine"></div> <!-- Separator -->
          Quartos:
          <select class="imvSel spec" name="dorm">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <div class="regSpec"> Sala:      <input class="regInp" type="textarea"  placeholder="" name="sala" value="" max="50"> </div>
          <div class="regSpec"> Cozinha:   <input class="regInp" type="textarea"  placeholder="" name="coz" value="" max="50"> </div>
          <div class="regSpec"> WC:        <input class="regInp" type="textarea"  placeholder="" name="wc" value="" max="50"> </div>
          <div class="regSpec"> Vagas:     <input class="regInp" type="textarea"  placeholder="" name="vagas" value="" max="50"> </div>
          <div class="regSpec"> Adicional: <input class="regInp" type="textarea"  placeholder="" name="addc" value="" max="50" onfocusout="changeText(this)"> </div>

          <div class="fwLine"></div> <!-- Separator -->
          <label for="check0">
            <div class="regSpec chkbx" onclick="toggle_check(this, 0)"> Exclusividade:
              <div id="chkbx" class="checkbox">
                <input id="check0" class="check" type="checkbox" name="excl" value="">
                <span class="mark" id="mark"></span>
              </div>
            </div>
          </label>
          <label for="check1">
            <div class="regSpec chkbx" onclick="toggle_check(this, 1)"> Aceita Animais:
              <div id="chkbx" class="checkbox">
                <input id="check1" class="check" type="checkbox" name="accanim" value="">
                <span class="mark" id="mark"></span>
              </div>
            </div>
          </label>
          <label for="check2">
            <div class="regSpec chkbx" onclick="toggle_check(this, 2)"> Água Indp.:
              <div id="chkbx" class="checkbox">
                <input id="check2" class="check" type="checkbox" name="aguaind" value="">
                <span class="mark" id="mark"></span>
              </div>
            </div>
          </label>
          <label for="check3">
            <div class="regSpec chkbx" onclick="toggle_check(this, 3)"> Luz Indp.:
              <div id="chkbx" class="checkbox">
                <input id="check3" class="check" type="checkbox" name="luzind" value="">
                <span class="mark" id="mark"></span>
              </div>
            </div>
          </label>
          <label for="check4">
            <div class="regSpec chkbx" onclick="toggle_check(this, 4)"> Placa:
              <div id="chkbx" class="checkbox">
                <input id="check4" class="check" type="checkbox" name="placa" value="">
                <span class="mark" id="mark"></span>
              </div>
            </div>
          </label>
          <label for="check5">
            <div class="regSpec chkbx" onclick="toggle_check(this, 5)"> Fotos:
              <div id="chkbx" class="checkbox">
                <input id="check5" class="check" type="checkbox" name="fotos" value="">
                <span class="mark" id="mark"></span>
              </div>
            </div>
          </label>
        </div>
        <!-- <div class="regCol 3">
        </div> -->
        <div class=""> <button class="submit_regBtn" type="submit" name="button"> Enviar </button> </div>
        <div class="fwLine"></div> <!-- Separator -->
        <div class="closeImvReg" onclick="closeImvReg()"> Fechar </div>
      </form>

    </div>

    <div class="imvs">
      <h1 id="imoveis"> Imóveis: </h1>
      <div class="imvSec">
        <div id="immobile" class="immobiles">
          <h6 id="end">Rua Doutor Nicolino Falci</h6>
          <h5 id="num">70</h5>
          <h5 id="value">750</h5>
          <h6 id="cep">04429-300</h6>
          <h6 id="nReg">04429300</h6>
        </div>
      </div>
    </div>

		<!-- <div id="regBtn" class="regBtn" onclick="imvReg(this)"> Página Inicial </div> -->

    <section class="imgUpSec">
      <form id="imgUp" class="imgUp" action=".php" method="post">
        <select class="imvRegs" name="">

        </select>
        <input type="file" name="img1" value="" placeholder="Image....">
        <input type="submit" name="" value="Enviar">
      </form>
    </section>

    <script type="text/javascript">
    cnxInd();
    function cnxInd() {
 	 	var cnx_status = document.getElementById("status").textContent;
 	 	var ind = document.getElementById("ind");

 	 	console.log(cnx_status);

 	 	if (cnx_status = "Connected:") {
 	 		ind.style.backgroundColor = "#38CA3E";
 	 		ind.style.boxShadow = "0px 0px 8px #38CA3E";
 	 	} else {
 	 		ind.style.backgroundColor = "red";
 	 		ind.style.boxShadow = "0px 0px 8px red";
 	 	}
 	 }
    </script>
  </body>
</html>