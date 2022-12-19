const mysql = require('mysql');
const fs    = require('fs');
const http  = require('http');

var getRegs = "SELECT nreg FROM imoveis";

var cnx = mysql.createConnection({
	host: "127.0.0.1",
	user: "root",
	password: "RxXxdbX22052002"
});

cnx.connect();

var regs;
cnx.query(getRegs, function(err, result) {
	regs = result;
});

window.alert('Result: ', regs);



function writeImvs(local) {
	var getRegs = "SELECT nreg FROM imoveis";
	var selQuery = "SELECT * FROM imoveis";

	var cnx = mysql.createConnection({
		host: "127.0.0.1",
		user: "root",
		password: "RxXxdbX22052002",
		database: "faiimoveis"
	});

	cnx.connect(function(err) {

	});

}

function getRegs() {

}

// function mount() {
//
// }
