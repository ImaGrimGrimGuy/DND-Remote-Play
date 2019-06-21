//////////////////
//  dnd_server.js
//////////////////

const path = require('path');
var express = require('express');
var app = express();
var bodyparser = require('body-parser');
var fs = require('fs');
var session = require('express-session');
var crypto = require('crypto');
var mysql = require('mysql');
var xml2js = require('xml2js');

// Object containing values for accessing MYSQL login/DM database (May end up being personal SQL server)

/*var connection = mysql.createConnection({    // NOT BEING USED AT THIS TIME
  host:"",
  user: "",
  password: "",
  database: "",
  port: 8080
});*/

// applys body-parser middleware to all incoming connections
app.use(bodyparser());

// Using in memory session for simplicity
app.use(session({
  secret: "DoIt",
  saveUninitialized: true,
  resave: false
}));

////////////////////////////////////////////////////////////


/*********************** HOME PAGE *************************/
app.get('/', function(req , resp){

	//Will handle login and page redirection to either PLAYER SIDE or DM SIDE pages
	resp.sendFile(__dirname + 'login.php')
});


/************************ PLAYER SIDE ***********************/
app.get('/game', function(req , resp){
	
	// (NEED TO FIGURE OUT WAY TO TELL "game.php" WHAT SQL SERVER TO PULL DATA FROM)
	resp.sendFile(__dirname + 'game.php');
});


/************************** DM SIDE ************************/
app.get('/dm', function(req , resp){

	/* This page will handle displaying DM's page:
	 * 1) List of running campaings (with options to edit)
	 * 2) Create new campaign
	 * 3) Chats with players (for later iterations)
	 */
});

app.post('/createCampaign', function(req , resp){

	/*Taking form data and then LOOOTS OF CODE for creating:
	 * 1) New SQL table for game/players 
	 * 2) Creating game data and links for players to join with (player links will be attached to email addresses)
	 */
});


////////////// Place at bottom of program////////////////////
// Set port to be 8080 (LISTENING DETAILS SUBJECT TO CHANGE)
app.listen(8080, () => console.log('Listening on Port 8080!'));
