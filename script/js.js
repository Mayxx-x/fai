var count = 0;

function showCont() {
  var form = document.getElementById("contactForm");
  var bg = document.getElementById("bgBlack");
  //show Form
  form.style.display='block';
  form.classList.add("fadeIn");
  //Show Black Background
  bg.style.display='block';
  bg.classList.add("fadeIn");
}
function closeCont() {
  var form = document.getElementById("contactForm");
  var bg = document.getElementById("bgBlack");
  //Hide Form
  form.style.display="none";
  bg.style.display="none";
}
function showAdmin() {
  if (count = 5) {
    document.getElementById('adminBtn').style.display="inline-block";
    count = 0;
    window.alert('n: ', count);
    // setTimeout(hideForm(), 10000);
  } else {count += 1;}
}

var username = "admin";
var password = "fai022216";

function validate() {
  var usernm = document.getElementById('usernm').value;
  var passwd = document.getElementById('passwd').value;

  if (usernm === username & passwd === password) {
    return true
  } else {
    window.alert("Nome De Usuário Ou senha Incorretos");
    return false;
  }
}
function showLoginForm() {
  var loginForm = document.getElementById("loginFormDiv");

  loginForm.style.display="inline-block";
  setTimeout(hideForm, 10000);
}
function showList() {
  document.getElementById("bairrosL").style.display="block";
}
function hideList() {
  document.getElementById("bairrosL").style.display="none";
}
function srcf(con) { //lista bairros
  inp = document.getElementById("bairro");
  bairro = con.textContent;
  inp.value = bairro;
}
function hideForm() {
  document.getElementById("loginFormDiv").style.display="none";
  document.getElementById("adminBtn").style.display="none";
}
function checkBefore(line, boxid) {
  var checkbox = document.getElementsByClassName('check'); //Checkbox Input

  return checkbox[boxid].checked;
}
function toggle_check(line, boxid) { //CheckBoxes Function
  var fcheckbox = document.getElementsByClassName('checkbox'); //Checkboxes Fake
  var checkbox = document.getElementsByClassName('check'); //Checkbox Input
  var checkmark = document.getElementsByClassName('mark'); //Spans Marks

  if (checkBefore(line, boxid)) {
    fcheckbox[boxid].style.backgroundColor="#1d4aa7";
    checkbox[boxid].checked;
    checkmark[boxid].textContent="X";
  } else {
    fcheckbox[boxid].style.backgroundColor="gray";
    checkbox[boxid].checked == false;
    checkmark[boxid].textContent="";
  }
}
function imvReg(opnBtn) {
  var newImv = document.getElementById('newImv');
  var checkbox = document.getElementsByClassName('check'); //Checkbox Input
  var imgUp = document.getElementById('imgUp');

  for (var i = 0; i < checkbox.length; i++) {
    checkbox[i].checked = false;
  }
  newImv.style.display="inline-block";
  imgUp.style.dysplay="none";
  opnBtn.style.display="none";
}

function closeImvReg() {
  var newImv = document.getElementById('newImv');
  var form = document.getElementById('imvReg');

  form.reset();

  newImv.style.display="none";
  document.getElementById('regBtn').style.display="block";
}

function changeText(inp, mt) {
  var inpText = inp.value;

  inp.style.textTransform="Capitalize";

  if (mt = "area") {
    console.log("ins");
    var pos = inpText.indexOf("m");
    inpText.concat("m²");
  }

  // window.alert(inp.value);
}
//Map
