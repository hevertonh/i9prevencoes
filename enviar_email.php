<?php

//isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro
if(isset($_POST['enviar'])){
    $assunto = "solicitação de orçamento";

    // pegando os dados do form...
    $msg = "Nome: " . $_POST["name"] . "<br>";
    $msg .= "Email: " . $_POST["email"] . "<br>";
    $msg .= "Phone: " . $_POST["phone"] . "<p>";
    $msg .= "Mensagem:<br>" . $_POST["message"];

    // email onde tu vai receber a mensagem
    $destinatario = "venda@i9prevencoes.com.br";

    // headers que prepara a mensagem
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["name"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    // envia o email...
    mail($destinatario,$assunto,$msg,$headers);

    // volta para contato.html
    header("Location: index.html");
}
?>