<?php
include 'conexao.php';
include 'index.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$mensagem = $_POST['txtmensagem'];
//a variável global $_POST é usada pois o método do formulário é post.


$incluir = $cn->query("insert into txt_visitante(nome_vis,emai_vis,mensagem_vis)
values('$nome','$email','$mensagem')");



?>
<script>location.href = 'index.php'</script>
