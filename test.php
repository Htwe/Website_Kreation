<?php

//test test test test
//test by sanmathi.

//Creating connection
$con = mysql_connect("127.0.0.1","root","");
//Checking connection
if (!$con)
  {
 // die('Could not connect: ' . mysql_error());
  echo "Failed to connect to MySQL: " . mysql_error();
 }

// Create database
$sql="CREATE DATABASE testDatabase";
if (mysql_query($sql,$con))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysql_error($con);
  }

// Create table
$sql="CREATE TABLE testDatabase.Persons(
FirstName CHAR(30),
LastName CHAR(30),
userName CHAR(30) NOT NULL,
email CHAR(30) NOT NULL, 
password CHAR(30) CHARACTER SET utf16 NOT NULL,
repsw CHAR(30) CHARACTER SET utf16 NOT NULL,
PRIMARY KEY (userName))";

$sql="CREATE TABLE testDatabase.Peremeter(
spot DECIMAL(6),
strike DECIMAL(6),
riskFree DECIMAL(6),
volatility DECIMAL(6),
dividend DECIMAL(6),
expiry DECIMAL(6)";
// Execute query
if (mysql_query($sql,$con))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysql_error($con);
  }
 
 /*
 CREATE TABLE IF NOT EXISTS `register` (
  `user_name` varchar(30) NOT NULL DEFAULT '',
  `phone` int(15) DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf16 NOT NULL,
  `psw` varchar(15) CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 */

mysql_close($con);
?>