<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "practical8";

$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
	die("Sambungan gagal:". mysqli_connect_error());
}
?>