function editImv(numBox, num) { //Ok!
  var number = num;
  var editor = document.getElementById("editor");
  var numId = document.getElementById('num_id');
  var panelNum = document.getElementById('panelNum');
  var numsBtns = document.getElementsByClassName('selBtn'); //1/2/3/4/5/6/7/8 Buttons

  for (var i=0; i < numsBtns.length; i++) { //Reset Buttons To Default BG color and Text
    numsBtns[i].style.color="#fff";
    numsBtns[i].style.backgroundColor="#1d4aa7";
  }
  numBox.style.backgroundColor="#4a73c6";
  numBox.style.color="#e61e1e";
  numId.innerHTML=number;
  panelNum.value=number;
}
function regImv() { //Register Immobile

}
var checkMark = 'FALSE';

function newImv() { //Test!
  var newImv = document.getElementById("imvReg");
  newImv.style.display="inline-block";
}

function bairros() { //?

}
document.getElementsByName('cont').innerHTML=("test");
// function fill() {
//   var contrato = document.getElementsByName('cont');
//   contrato.innerHTML(<?php echo ""; ?>);
// }
function writeIn() { //Finish.. important
  var element = document.getElementsByClassName('specInps');
  for (var i = 0; i < element.length; i++) {
    element[i].value=i;
    window.alert(element[i].value);
  }
}

function displayConf() {

}
