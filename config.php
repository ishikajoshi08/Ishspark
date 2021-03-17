<?php

/*
This file contains database configuration by running mysql using user "root" and password ""
*/

$username = "root";
$password = "";
$server = "localhost";
$dbname  = "spark_bank";
//try connecting to the database
$conn = mysqli_connect($server,$username,$password,$dbname);

//check the connection
if(!$conn){
	die("Could not connect to the database due to the following error -->".
		mysqli_connect_error());
	}
?>