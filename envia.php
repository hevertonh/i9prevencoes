<?// Destinatário
$para = "venda@i9prevencoes.com.br";

// Assunto do e-mail
$assunto = "Contato do através do site ...";

// Campos do formulário de contato
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Monta o corpo da mensagem com os campos
$corpo = "<html><body>";
$corpo .= "Name: $name ";
$corpo .= "Email: $email phone: $phone Message: $message";
$corpo .= "</body></html>";

// Cabeçalho do e-mail
$email_headers = implode("\n", array("From: $nome", "Reply-To: $email", "Subject: $assunto", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($name) && !empty($email) && !empty($message)) {
    mail($para, $assunto, $corpo, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('http://www.i9prevencoes.com.br/teste');</script>";
} else {
    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');window.location.assign('http://www.i9prevencoes.com.br/teste');</script>";
}