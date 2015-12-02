<?php

/* informa��es para conex�o � base de dados */

$host = "localhost";  // host do mysql
$user = "admini";       // usu�rio
$pass = "123456";     // senha do usu�rio
$base = "noticias"; // nome da base de dados

// conecta o mysql
$conn = mysql_connect($host, $user, $pass) or die ("<br><br><center>Problemas ao conectar no servidor: " . mysql_error() . "</center>");
// seleciona a base de dados
$banc = mysql_select_db($base) or die ("<br><br><center>Problemas ao selecionar a base de dados do sistemas: " . mysql_error() . "</center>");

?>
