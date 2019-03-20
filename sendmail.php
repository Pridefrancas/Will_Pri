<?php
#
# Exemplo de envio de e-mail SMTP PHPMailer - www.secnet.com.br
#
# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php");

# Inicia a classe PHPMailer
$mail = new PHPMailer();

# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtpout.secureserver.net"; # Endereço do servidor SMTP
//$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
$mail->Port = 80; // Porta TCP para a conexão
$mail->SMTPAutoTLS = true; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'contato@deflorealma.com.br'; # Usuário de e-mail
//$mail->Password = 'GSPerte#182838'; // # Senha do usuário de e-mail
$mail->Password = 'GDPerte#182838'; // # Senha do usuário de e-mail

$destinatario="contato@deflorealma.com.br";
$bcc="pertedecor@gmail.com";
//$headers .="Bcc: {$bcc}\r\n";
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];
$assunto = "Solicitacao de Orcamento via site deflorealma.com.br";
$mail->Subject = "Solicitacao de Orcamento via site deflorealma.com.br"; # Assunto da mensagem

# Define o remetente (você)
$mail->From = $email; # Seu e-mail
$mail->FromName = $nome; // Seu nome
header('Content-type: text/html; charset=iso-8859-1');
# Define os destinatário(s)
$mail->AddAddress('contato@deflorealma.com.br', 'Contato'); # Os campos podem ser substituidos por variáveis
#$mail->AddAddress('webmaster@nomedoseudominio.com'); # Caso queira receber uma copia
#$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

# Define os dados técnicos da Mensagem
$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
#$mail->CharSet = 'iso-8859-1'; # Charset da mensagem (opcional)

# Define a mensagem (Texto e Assunto)
# Define os anexos (opcional)
$mail->AddAttachment("/img/deflorealma/logosemfundo_branco.png"); # Insere um anexo
// monta o e-mail na variavel $body
$body = "===================================" . "<br />";
$body = $body . "SOLICITACAO DE ORCAMENTO VIA SITE" . "<br />";
$body = $body . "===================================" . "<br />";
$body = $body . "Nome: " . $nome . "<br />";
$body = $body . "Email: " . $email . "<br />";
$body = $body . "Telefone: " . $telefone . "<br />";
$body = $body . "Mensagem: " . $mensagem . "<br />";
$body = $body . "===================================" . "<br />";


$mail->Body = $body;
//$mail->AltBody = "Este é o corpo da mensagem de teste, somente Texto! \r\n :)";
# Envia o e-mail
$enviado = $mail->Send();

# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Cabeçalho do e-mail
$email_headers=implode("\n", array("From: $nome", "Reply-To: $email", "Subject: $mail->Subject", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
//Verifica se os campos estão preenchidos para enviar então o email
if ($enviado && !empty($nome) && !empty($email) && !empty($mensagem)) {
    // envia o email
    mail($destinatario, $mail->Subject , $body, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('http://www.deflorealma.com.br/#page-top');</script>";
} else {
    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');window.location.assign('http://www.deflorealma.com.br/#orcamento');</script>";
}
# Exibe uma mensagem de resultado (opcional)
/*if ($enviado) {
 echo "E-mail enviado com sucesso!";
} else {
 echo "Não foi possível enviar o e-mail.";
 echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}*/
// redireciona para a página de obrigado
//header("location:buques.html");*/
?>