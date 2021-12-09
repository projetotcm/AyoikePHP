<?php
// Onde está hospedado o seu banco. No nosso caso,

$servidor = "localhost";
// O nome do usuário para se conectar.
$usuario = "ayoike";
// A senha doo usuário acima para se conectar.
$senha = "forcabrilhante";
// O nome do seu banco de dados.
$banco = "db_satyoike";
$cn = new PDO("mysql:host=$servidor;dbname=$banco",
$usuario, $senha);
?>
