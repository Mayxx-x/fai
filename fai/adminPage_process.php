<?php
	include "PHP/connect.php";

	//Imv Register
	/*$getId = $cnx->query("SELECT ID FROM imoveis");
	$ids = array();

	while ($row = $getId->fetch_assoc()) {
		array_push($ids, $row['ID']);
	};

	if (sizeof($ids) < 0) {
		$dbLastId = 0;
	} else {
			$dbLastID = end($ids) + 1;
		}
	*/

	//add_info
	$quartos = $_POST["dorm"];
	$wc = $_POST["wc"];
	$vagas = $_POST["vagas"];
	$aUtil = $_POST["aUtil"];
	$aTotal = $_POST["aTotal"];
	$casasquant = $_POST["casas"];

	//back_info
	$nreg = $_POST["regid"];
	$corretor = $_POST["corretor"];
	$captador = $_POST["cap"];
	$preenchpor = $_POST["preenchPor"];
	$garantias = $_POST["garantias"];
	$condicoes = $_POST["cond"];
	$chaves = $_POST["chaves"];
	$obs = $_POST["obs"];
	$excl = "false";

	//bool_info
	$accAnim = "false";
	$aguaInd = "false";
	$luzInd = "false";
	$placa = "false";
	$fotos = "false";
	$sala = "false";
	$cozinha = "false";

	//imv_abt
	$tipo = $_POST["imvTp"];
	$imvTp = $_POST["imvTp2"];
	$subTp = $_POST["subTp"];
	$desc = $_POST["imvdesc"];

	//imv_loc
	$end = $_POST["endereco"];
	$numero = $_POST["numero"];
	$bairro = $_POST["bairro"];
	$imed = $_POST["imed"];

	//prop_data
	$email = $_POST["ownEmail"];
	$numero = $_POST["ownTel"];
	$nome = $_POST["owner"];

	//rent
	$valor_v = $_POST["imvValorV"];
	$valor_a = $_POST["imvValorA"];
	$iptu = $_POST["iptu"];

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
	$select = $cnx->query("SELECT * FROM add_info, back_info, bool_info, imv_abt, imv_loc, prop_data, rent");	
	//$getRowsQuery = $cnx->query("SHOW COLUMN FROM ");
	
	//tables in database
	#$imv_dbs = array($add_info,  $back_info, $bool_info, $imv_abt, $imv_loc, $prop_data, $rent);

	//rows from each tables in arrays
	$add_info_r = array($quartos, $wc, $vagas, $vagas, $aUtil, $aTotal, $casasquant);
	$back_info_r = array($nreg, $corretor, $captador, $preenchpor, $garantias, $condicoes, $chaves, $obs, $excl);
	$bool_info_r = array($accAnim, $aguaInd, $luzInd, $placa, $fotos, $sala, $cozinha);
	$imv_abt_r = array($tipo, $imvTp, $subTp, $desc);
	$imv_loc_r = array($end, $numero, $bairro, $imed);
	$prop_data_r = array($email, $numero, $nome);
	$rent_r = array($valor_v, $valor_a, $iptu);

	/*
	for ($i = 0; $i < sizeof($back_info_r); $i++ {
		$INS_Q = "INSERT INTO $imv_dbs[0] VALUES json_encode($add_info_r);
		VALUES 
	}

	$INS_Q = "INSERT INTO $imv_dbs[$][]
		VALUES "'$quartos', '$wc', '$vagas', '$aUtil', '$aTotal', '$casasquant'";
	

	if (!$insertQuery) {
	echo 'data not inserted </br> Error: ' . $cnx->error . "</br>";
	} else {
	echo 'Data Inserted';
	}
	*/

	//remove this -> "

	$cnx->close();
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/imvStyles.css"/>
		<link rel="stylesheet" href="css/icons.css"/>
		<title></title>
	</head>
	<body>
		<div id="hg_bc" style="display: none;" onclick="">
			<div id="imgs_pan" style="display: none;">
				<div class="close_btn"> X </div>
				a
			</div>
		</div>
		<div class="imv imv1 bord">
			<div class="phs">
				<div class="pArrow a">&#10094;</div>
				<div class="pArrow b">&#10095;</div>
				<div class="imgUp">
					<div class="imT"> Enviar Imagens: </div>
					<div class="openBtn" onclick="open_panel()"> Selecionar </div>
					<div class="phs_grid">
						
					</div>
				</div>
			</div>
			<div class="imv_info">
				<h6> <?php echo $nreg ?> </h6>
				<h2 class="imvType color1"> <?php echo "$imvTp $subTp | $tipo"?> </h2> <h2 class="tp">  </h2>
				<h3 class="subType"></h3>
				<div class="specRow"> <div class="icon ico1 inL"></div> <h5 id="bairro"> <?php echo $bairro?> </h5> </div>
				<div class="specRow"> <div class="icon ico2 inL"></div> <h5 id="rua"> <?php echo $end ?> </h5> </div>
				<div class="specRow"> <div class="icon ico3 inL"></div> <h5 id="vagas"> <?php echo $vagas ?> </h5> </div>
				<div class="specRow"> <div class="icon ico4 inL"></div> <h5 id="aUti"> <?php echo $aUtil ?> </h5> </div>
				<div class="specRow"> <div class="icon ico4 inL"></div> <h5 id="aTotal"> <?php echo $aTotal ?> </h5> </div>
			</div
		</div>
	</body>
	<script >
		function open_panel() {
			var panel = document.getElementById("imgs_pan");
			var bg = document.getElementById("hg_bc");

			panel.style.display="block";
			bg.style.display="block"
		}
		function close_panel() {
			document.getElementById("hg_bc").display="none";
			document.getElementById("imgs_pan").style.display="none";
		}
	</script>
</html>
