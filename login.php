<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="test";

$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
	die("No hay conexión".mysli_connect_error());
}

$nombre=$_POST["username"];
$pass=$_POST["password"];

$query= mysqli_query($conn,"SELECT * FROM login WHERE usuario='".$nombre."' and password='".$pass."'");

$nr=mysqli_num_rows($query);

if($nr==1)
{
	header("Location: pdf.php");
	
}else if($nr==0){
	header("Location: INICIO.html");
}

?>

