<?php

$email = $_POST["email"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];

//	$address 	= $_POST["address"];
//	$addressin 	= $_POST["addressin"];  
//	$city 		= $_POST["city"];      
//	$codigoP	= $_POST["codigoP"];
//	$checkbox 	= $_POST["checkbox"];
//	$pass           = $_POST["pass"];
require ('validationSis.php');
$newConn = new dbconn();

$sql = "INSERT INTO usuarios(email,nombre,apellido,address,addressin,city,codigoP,checkbox,pass,activo) VALUES('" . $email . "','" . $nombre . "','" . $apellido . "','" . $address . "','" . $addressin . "','" . $city . "','" . $codigoP . "','" . $checkbox . "','" . $pass . "',1)";

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

echo "<br> Email : " . $email . "<br>";
echo "Nombre : " . $nombre . "<br>";
echo "Apellido : " . $apellido;
?>

