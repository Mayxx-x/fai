<?php
	include "connect.php";

	//Imv Register
	$getId = $cnx->query("SELECT ID FROM imoveis");
	$ids = array();

	while ($row = $getId->fetch_assoc()) {
		array_push($ids, $row['ID']);
	};

	if (sizeof($ids) < 0) {
		$dbLastId = 0;
	} else {
			$dbLastID = end($ids) + 1;
		}

	//add_info
	$quartos = $_POST["dorm"];
	$wc = $_POST["wc"];
	$vagas = $_POST["vagas"];
	$autil = $_POST["aUtil"];
	$atotal = $_POST["aTotal"];
	$casasquant = $_POST["casas"];

	//back_info
	$


	$nreg         = $_POST["regid"];    $end     = $_POST["endereco"];
	$cType      = $_POST["imvTp"];      $num     = $_POST["numero"];
	$imvType    = $_POST["imvTp2"];     $bairro  = $_POST["bairro"];
	$subTp      = $_POST["subTp"];      $imed    = $_POST["imed"];
	$value      = $_POST["imvValor"];   $comp    = $_POST["comp"];
	$aTot       = $_POST["aTotal"];     $CEP     = $_POST["cep"];
	$aUti       = $_POST["aUtil"];      $imvDesc = $_POST["imvdesc"];
	$owner      = $_POST["owner"];      $obs     = $_POST["obs"];
	$ownerTel   = $_POST["ownTel"];     $chaves  = $_POST["chaves"];
	$email      = $_POST["ownEmail"];   $accAnim = "false";
	$garant     = $_POST["garantias"];  $exclu   = "false";
	$IPTU       = $_POST["iptu"];       $aguaInd = "false";
	$casas      = $_POST["casas"];      $luzInd  = "false";
	$captador   = $_POST["cap"];        $placa   = "false";
	$corretor   = $_POST["corretor"];   $fotos   = "false";
	$preenchPor = $_POST["preenchPor"]; $condc   = $_POST["cond"];

	//IMV Details
	$bedrooms   = $_POST["dorm"];
	$sala       = $_POST["sala"];
	$cozinha    = $_POST["coz"];
	$WC         = $_POST["wc"];
	$vagas      = $_POST["vagas"];
	$addc       = $_POST["addc"];

	//Date
	$regDate = date("d/m/y");
	$lastEdit = date("d/m/y");

	defineCheckboxes();
	function defineCheckboxes() {
	 $checkVar = array('$excl', '$accAnim', '$chaves', '$aguaInd', '$luzInd', '$placa', '$fotos');
	 $postValues = array("excl", "accanim", "chaves", "aguaind", "luind", "placa", "fotos");

	 for ($i=0; $i < sizeof($postValues); $i++) {
		if (isset($_POST[$postValues[$i]])) {
		  $checkVar[$i] = "true";
		}
		if (!isset($_POST[$postValues[$i]])) {
		  $checkVar[$i] = "false";
		}
	 }
	}

	//Queryes
	$select = $cnx->query("SELECT * FROM faiimoveis");
	$getRowsQuery = $cnx->query("SHOW COLUMN FROM imoveis");
	echo $getRowsQuery;

	$insertQuery = $cnx->query("INSERT INTO imoveis (ID, nreg, tipo, imvTp, subTp, end, numero, bairro, imediacoes, descricao, comp, cep, quartos, sala, cozinha, wc, vagas, adicionais, chaves, garantias, condicoes, autil, atotal, excl, iptu, casasquant, accanim, aguaind, luzind, placa, fotos, prop, propT, propE, obs, captador, corretor, preenchpor, valor, insDate, lastEdit)
	VALUES ('$dbLastID', '$ID', '$cType', '$imvType', '$subTp', '$end', '$num', '$bairro', '$imed', '$imvDesc', '$comp', '$CEP', '$bedrooms', '$sala', '$cozinha', '$WC',
			'$vagas', '$addc', '$chaves', '$garant', '$condc', '$aUti', '$aTot', '$exclu', '$IPTU', '$casas', '$accAnim', '$aguaInd', '$luzInd', '$placa', '$fotos', '$owner', '$ownerTel', '$email', '$obs',
			'$captador', '$corretor', '$preenchPor', '$value', '$regDate', '$lastEdit')");

	if (!$insertQuery) {
	echo 'data not inserted </br> Error: ' . $cnx->error . "</br>";
	} else {
	echo 'Data Inserted';
	}

	//remove this -> "
	$cnx->close();
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/style.css"/>
    <title></title>
  </head>
  <body>

		<div class="imv imv1 bord">
			<div class="phs">
				<div class="pArrow a">&#10094;</div>
				<div class="pArrow b">&#10095;</div>
				<img src="images/beautifulHouse" alt="#image">
			</div>
			<h6> 5421-/2019 </h6>
			<h2 class="imvType color1"> <?php echo $cType?> | <?php echo $imvType?></h2> <h2 class="tp">  </h2>
			<h3 class="subType"></h3>
			<div class="specRow"> <div class="icon ico1 inL"></div> <h5 id="bairro"> <?php echo $bairro?> </h5> </div>
			<div class="specRow"> <div class="icon ico2 inL"></div> <h5 id="rua"> <?php echo $end ?> </h5> </div>
			<div class="specRow"> <div class="icon ico3 inL"></div> <h5 id="vagas"> <?php echo $vagas ?> </h5> </div>
			<div class="specRow"> <div class="icon ico4 inL"></div> <h5 id="aUti"> <?php echo $aUti ?> </h5> </div>
			<div class="specRow"> <div class="icon ico4 inL"></div> <h5 id="aTotal"> <?php echo $aTot ?> </h5> </div>
		</div>
		<button type="button" name="button" onclick="window.location='../admin.php'"> Back </button>
    Upload Images:
  </body>
</html>
