<?
header('Content-type: text/html; charset=iso-8859-1');
# alterar a variavel abaixo colocando o seu email
//$destinatario = "contato@deflorealma.com.br";
$destinatario = "contato@deflorealma.com.br";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];
$assunto = "Solicitação de Orçamento via site deflorealma.com.br";

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "SOLICITACAO DE ORCAMENTO VIA SITE" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

///////////////////////WILLIAM
// Cabeçalho do e-mail
$email_headers = implode("\n", array("From: $nome", "Reply-To: $email", "Subject: $assunto", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($nome) && !empty($email) && !empty($mensagem)) {
    // envia o email
    mail($destinatario, $assunto , $body, "From: $email\r\n");
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('http://www.deflorealma.com.br/#page-top');</script>";
} else {
    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');window.location.assign('http://www.deflorealma.com.br/#orcamento');</script>";
}
// redireciona para a página de obrigado
//header("location:buques.html");
?>