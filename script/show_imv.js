function show_imv(str) {
    if(str == "") {
        document.getElementsByClassName("imvsc").innerHTML = "";
        return;
    } else {
        var cnxx = new XMLHttpRequest();
        cnxx.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementsByName("testD").innerHTML = this.responseText;
        }
    };
    cnxx.open("POST", "PHP/write_imv.php", true);
    cnxx.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    cnxx.send("str");
    console.log('RetrID: ', str);
    }
}