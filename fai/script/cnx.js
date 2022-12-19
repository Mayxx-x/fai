// cnx.js

const mysql = require('mysql');
const http = require('http');
const fs = require('fs');

var immobiles = [];

var imvTemplate = document.getElementByClassName("immobiles");

console.log("Number of immobiles: ", immobiles.lenght);

var cnx = mysql.createConnection({
	host: "127.0.0.1",
	user: "B055",
	password: "RxXx22052002"
});

cnx.connect(function(err) {
	
	if (err) throw err;
	// if (cnx) console.log("Connected!");
	cnx.query("USE faiimoveis"); // Select The Database

	cnx.query("SHOW COLUMNS FROM imoveis", function (err, row) {
		if (err) throw err;

	});
	cnx.query("SELECT * FROM imoveis", function (err, result, fields) {
		if (err) throw err;


		console.log("Imoveis: ", result.length);
		for (var i = 0; i < result.length; i++) {
			console.log("Imovel: ", result[i]);
		}

		// console.log(result[1]);
	});
});

