<?php
	date_default_timezone_set('America/Sao_Paulo');

	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	//Variáveis 
	$erro = false;
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$tipo = $_POST['tipo'];
	$mensagem = $_POST['mensagem'];
	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');

	// Verifica se o POST tem algum valor
	if ( !isset( $_POST ) || empty( $_POST ) ) {
		$erro = 'Nada foi postado.';
	}
	// Cria as variáveis dinamicamente
	foreach ( $_POST as $chave => $valor ){
		// Remove todas as tags HTML
		// Remove os espaços em branco do valor
		$$chave = trim( strip_tags( $valor ) );
		// Verifica se tem algum valor nulo
		if ( empty ( $valor ) ) {
			$erro = 'Existem campos em branco.';
		}
	}
	// Se existir algum erro, mostra o erro
	if ( $erro ) {
		echo $erro;
	} else {
		// Se a variável $erro continuar com valor falso
		// Você pode fazer o que preferir aqui, por exemplo, 
		// enviar para a base de dados, ou enviar um email
		// Tanto faz. Vou apenas exibir os dados na tela.
		//foreach ( $_POST as $chave => $valor ) {
		//}
	}

	// Corpo E-mail
	$arquivo = "<style type='text/css'>
		body{
			padding: 2rem 0;
			background: -webkit-gradient(linear,left top,left bottom,from(rgba(22,22,22,.5)),color-stop(75%,rgba(22,22,22,.6)),to(#535353)),url(https://lh3.googleusercontent.com/pp6HRk0MoINXLfE1GWvIIR4pfri9M3OkvR9mfS0gSmTH_Stxthx3tW1n8ugQrK_IcEpCpn_ACpfdYTTy9xZn77MST1dM1KC0P51wcM8dx0j-p2M3JGOJ0wRZgvNeggwuQG3QQskRzugIPgPo7SmSayGkiBWbY-awPHUpPb9cYpeSOgB0ECCfPfc_o7y0-2bz3oU4cc1CMfDyTBlJNOvziwodPJfzQpGm6Cim2kLoB8EHXCm6hbqkAj5dIfYoS3HjxY1d0q9Qpq1L6942kmz0IpMLL5rjwyzQox6adBzWy4l6w1GcwwMLTyyLeisoLQNwgtC-P3M61qiYcK_4ZWwUuiPTHlRw5z38npy943wrC4AWEwHK-Dpm1E77V2NpFduR22tPFqcajXnugVZnZTG3o0qzu5J6lAfpQ0qQp2Tt1-AVZLPXjRuxu1IS6ifDnkB2dvr9aT0dABSiJbsJM5HrqzKkbtNoXxPMkahYVuDr1FwDfOdoXsy_pGZy4SeK66gciIXgIblpHgEb-BxwBVrw5tBTO0crS4XFkquOUkCsv-v6eJCZSDKF8rr_gJqSf0vGdpBEUYCa2EYipCfgr1bCYnNyORVBe5hAFqo5Bmg=w930-h641);
    		background-position: center;
    		background-repeat: no-repeat;
    		background-attachment: scroll;
    		background-size: cover;
    		width: 90%;
			margin:0px;
			font-family:Verdane;
			font-size:12px;
			color: #666666;
		}
		a{
			color: #666666;
			text-decoration: none;
		}
		a:hover{
			color: #FF0000;
			text-decoration: none;
		}
		</style>
		<html style='padding: 2rem 0; background: -webkit-gradient(linear,left top,left bottom,from(rgba(22,22,22,.5)),color-stop(75%,rgba(22,22,22,.6)),to(#535353)),url(https://lh3.googleusercontent.com/pp6HRk0MoINXLfE1GWvIIR4pfri9M3OkvR9mfS0gSmTH_Stxthx3tW1n8ugQrK_IcEpCpn_ACpfdYTTy9xZn77MST1dM1KC0P51wcM8dx0j-p2M3JGOJ0wRZgvNeggwuQG3QQskRzugIPgPo7SmSayGkiBWbY-awPHUpPb9cYpeSOgB0ECCfPfc_o7y0-2bz3oU4cc1CMfDyTBlJNOvziwodPJfzQpGm6Cim2kLoB8EHXCm6hbqkAj5dIfYoS3HjxY1d0q9Qpq1L6942kmz0IpMLL5rjwyzQox6adBzWy4l6w1GcwwMLTyyLeisoLQNwgtC-P3M61qiYcK_4ZWwUuiPTHlRw5z38npy943wrC4AWEwHK-Dpm1E77V2NpFduR22tPFqcajXnugVZnZTG3o0qzu5J6lAfpQ0qQp2Tt1-AVZLPXjRuxu1IS6ifDnkB2dvr9aT0dABSiJbsJM5HrqzKkbtNoXxPMkahYVuDr1FwDfOdoXsy_pGZy4SeK66gciIXgIblpHgEb-BxwBVrw5tBTO0crS4XFkquOUkCsv-v6eJCZSDKF8rr_gJqSf0vGdpBEUYCa2EYipCfgr1bCYnNyORVBe5hAFqo5Bmg=w930-h641);    background-position: center;
		background-repeat: no-repeat;
		background-attachment: scroll;
		background-size: cover; width: 90%;'>
			<table width='510' border='1' cellpadding='1' cellspacing='1' style='-webkit-border-radius: 16px 16px 16px 16px; border: 5px double #d8e7f3; box-shadow: 4px 4px 4px 4px rgba(216,231,243,1); padding: 8px;'>
				<tr>
					<td>
						<tr>
							<td width='500'>Nome: <b> $nome </b> </td>
						</tr>
						<tr>
							<td width='320'>E-mail: <b> $email </b> </td>
						</tr>
						<tr>
							<td width='320'>Telefone: <b> $telefone </b> </td>
						</tr>
						<tr>
							<td width='320'>Tipo de evento: <b> $tipo </b> </td>
						</tr>
						<tr>
							<td width='320'>Mensagem: <b> $mensagem </b> </td>
						</tr>
					</td>
				</tr>
				<tr>
					<td>Este e-mail foi enviado em <b> $data_envio </b> às <b> $hora_envio </b></td>
				</tr>

			</table>
		</html>";
	//enviar
	// emails para quem será enviado o formulário
	$emailenviar = "contato@deflorealma.com.br, aline.teixeiradoliveira@gmail.com";
	$destino = $emailenviar;
	$assunto = "Contato pelo Site deflorealma.com.br";
	 // É necessário indicar que o formato do e-mail é html
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Contato <contato@deflorealma.com.br>';
	//$headers .= "Bcc: $EmailPadrao\r\n";   
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
		echo "Mensagem enviada! :) Obrigado por seu contato, em breve lhe responderemos!".'<meta http-equiv="refresh" content="3;URL=index.html" />';
	}else{
		echo "Desculpe, a mensagem não pode ser enviada. :´(";
	}
?>