<?php //inicia o php

$name     = $_POST["name"]; //trata a variavel nome
$email     = $_POST["email"]; //trata a variavel email
$phone    = $_POST["phone"]; //trata a  variavel assunto
$message   = $_POST["message"]; //trata a variavel mensagem


global $email; //transforma em variavel global a variavel email

$data      = date("d/m/y"); //pega a data
$ip        = $_SERVER['REMOTE_ADDR']; //pega o ip de quem enviou
$hora      = date("H:i"); //pega a hora

mail ("venda@i9prevencoes.com.br",   // aqui voc~e coloca o seu email                    
      
      "Name: $nome //posta o nome da pessoa em sua caixa de mensagem
       Email: $email //posta o email da pessoa em sua caixa de mensagem
       Phone: $phone ////posta o assubnto da pessoa em sua caixa de mensagem
       Message: $message", //posta o mensagem da pessoa em sua caixa de mensagem
      "From: $email <$nome>" //posta na sua caixa postal que quem enviou foi nome e o email dele
     );

//agora vamos imprimir na tela o resultado ou a resposta
echo "<b>$name</b>, sua mensagem foi efetuada com sucesso.<br>Em breve estaremos lhe respondendo.";
echo "Click <a href=\"pagina.html\">aqui</a>para voltar!";
?> //fechamos o php