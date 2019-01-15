<?
# alterar a variavel abaixo colocando o seu email
$destinatario = "contato@deflorealma.com.br";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$assunto = "Contato via site deflorealma.com.br";

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "SOLICITAÇÃO DE ORCAMENTO VIA SITE DE FLOR E ALMA" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:contato.html");


?>