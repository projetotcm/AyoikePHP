<?php
// Onde está hospedado o seu banco. No nosso caso,

$servidor = "localhost";
// O nome do usuário para se conectar.
$usuario = "db_stayoike";
// A senha doo usuário acima para se conectar.

$senha = "forcabrilhante";
//$senha = "Figure.09";
// O nome do seu banco de dados.
$banco = "db_stayoike";
$cn = new PDO("mysql:host=$servidor;dbname=$banco",
$usuario, $senha);
?>
