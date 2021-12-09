<?php
include 'conexao.php';


$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$mensagem = $_POST['txtmensagem'];
//a variável global $_POST é usada pois o método do formulário é post.

//echo $nome .'<br>';
//echo $email .'<br>';
//echo $senha .'<br>';
//echo $end .'<br>';
//echo $cidade .'<br>';
//echo $cep .'<br>'; 


$incluir = $cn->query("insert into txt_visitante(nome_vis,email_vis,mensagen_vis)
values('$nome','$email','$mensagem')");

header('location:#home');
//agora será feito um select
//as duas páginas serão criadas na próxima aula

?>
