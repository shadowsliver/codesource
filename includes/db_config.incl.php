<?php
$servername = "localhost";
$dbUser = "user";
$dbPass = "password";
$dbName = "db_name";

$conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUser, $dbPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // geeft fouten in sql weer