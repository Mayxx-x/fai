window.onload = function loadPage() {
  // init();
  // document.getElementById('mainBody').style.display="none";

}

function imvRegF() {
  var gform = document.getElementById("imvReg");
  var regRows = ["regid", "imvTp", "imvTp2", "subTp", "imvValor", "aTotal", "aUtil", "owner", "ownEmail", "chaves", "garantias", "cond", "iptu", "casas", "cap", "corretor", "preenchPor", "endereco", "numero", "bairro", "imed", "comp", "cep", "imvdesc", "obs", "dorm", "sala", "coz", "wc", "vagas", "addc", "excl", "accanim", "aguaind", "luzind", "placa", "fotos"];

  console.log("Rows On Form: ", regRows.length);

  return true;
}

function editImv(imvNum) {
  var imvNumb = imvNum;
  var imv_info = document.getElementById("num_id");

  console.log("Imv: ", imvNumb)
}
