<?php 
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['telefone'];
$tipo = $_POST['tipo'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

$to_email = 'contato@deflorealma.com.br';
$subject = 'Contato via site (deflorealma.com.br)';
//$message = 'This mail is sent using the PHP mail ';
$message ='Nome: '.$nome."\r\n"
.'e-Mail: '.$email."\r\n"
.'Telefone: '.$fone."\r\n"
.'Tipo de evento: '.$tipo."\r\n"
.'Data do evento: '.$data."\r\n"
.'Comentario: '.$mensagem;
$headers = 'From: contato@deflorealma.com.br';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Desculpe, a mensagem não pode ser enviada. :´(";

} else { //send email 
    mail($to_email, $subject, $message, $headers);
    echo "Mensagem enviada. Obrigado por seu contato, em breve entraremos em contato!".'<meta http-equiv="refresh" content="3;URL=index.html" />';
}
?>