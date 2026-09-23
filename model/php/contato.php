<?php
require_once("connect.php");
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');

  //Compo E-mail
  $arquivo = "
<html>
<head>
    <meta charset='UTF-8'>
</head>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> </p>
  </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "gustavo.santos@inspiracapital.com.br";//mysqli_fetch_array($connect->query("SELECT * FROM config where tipo = 'contato_email1'"))['valor'];

  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=UTF-8\n";
  $headers .= "From: <$email>";
  
  //Enviar
//tirar comentário

$status = false;

  if(mail($destino, $assunto, $arquivo, $headers)){
    $status = true;

  }else{
    $status = false;

  }
  


$dados = [
  'status' => $status
  
];
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$json_formatado = json_encode($dados, JSON_PRETTY_PRINT);
echo $json_formatado;

?>