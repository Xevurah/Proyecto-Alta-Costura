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

$sql = "INSERT INTO usuarios(email,nombre,apellido) VALUES('" . $email . "','" . $nombre . "','" . $apellido . "')";

$newConn->openconn();
$newConn->exequery($sql);
$newConn->closeconn();

header('Location: JavascriptAli.html');
?>

