<?php

if(!$_POST['txtTel']){
$nomeremetente = strip_tags($_POST['txt-nome']);
$emailremetente = trim($_POST['txt-email']);
$emaildestinatario = 'contabas@contabas.com.br';
$telefone = strip_tags($_POST['txt-tel']);
$assunto = strip_tags($_POST['txt-assunto']);
$mensagem = strip_tags($_POST['txt-msg']);

$mensagemHTML = '
<strong>Formulário de Contato</strong>
<p><b>Nome:</b> '.$nomeremetente.' <p>
<b>E-Mail:</b> '.$emailremetente.' <p>
<b>Telefone:</b> '.$telefone.' <p>
<b>Assunto:</b> '.$assunto.' <p>
<b>Mensagem:</b> '.$mensagem.'</p>
<hr>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n";

$headers .= "Return-Path: $emaildestinatario \r\n";

$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
if($envio){
echo "<script>location.href='index.html#contato'</script>";
}
}else{
  echo "<script>location.href='index.html'</script>";
}
?>