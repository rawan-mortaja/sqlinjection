<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatapp";

$input = $_POST['input'];
$conn = new mysqli($servername, $username, $password, $dbname);
