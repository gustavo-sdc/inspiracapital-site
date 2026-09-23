<?php
require_once("connect.php");
  //Variáveis
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  $numero = $_GET['numero'];
  $cargo = $_GET['cargo'];
  $empresa = $_GET['empresa'];
  $data_envio = date('d/m/Y');

  //Compo E-mail
  $arquivo = "
    Nome: $nome;
    E-mail: $email;
    Numero: $numero;
    Cargo: $cargo;
    Empresa: $empresa;
    Este e-mail foi enviado em $data_envio. 
  ";
  
  //Emails para quem será enviado o formulário
  $destino = 'luiz.vicari@inspiracapital.com.br';

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