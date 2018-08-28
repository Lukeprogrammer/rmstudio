<?php 
	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer();
	//Defini que sera usado SMTP 
	$Mail->IsSMTP();

	//Enviar e-mail em html
	$Mail->isHTML (true); 

	//Aceitar caracteres especiais
	$Mail->Charset = 'UTF-8';

	//Configurações
	$Mail->SMTPAuth = true;
	$Mail->SMTPSecure = 'ssl';

	//Nome do servidor
	$Mail->'localhost';

	//Porta de saida de e-mail
	$Mail ->Port = 80;

	//Dados do usuario do e-mail de saida
	$Mail->Username = 'a-lucascosta@hotmail.com';
	$Mail->Password = '';

	//Dados do Remetente
	$Mail->From = 'a-lucascosta@hotmail.com';

	//Nome do remetente
	$Mail->FromName = 'rmstudio';

	//Assunto da mensagem
	$Mail->Subject = 'Titulo - Recuperar Senha';

	//Corpo da Mensagem
	$Mail->Body = 'Conteúdo do E-mail';

	//Corpo da Mensagem em Texto
	$Mail->AltBody = 'Conteudo do Email em texto';

	//Destinatario
	$Mail->AddAddress('acoastlucas@gmail.com');

	if(!$Mail->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: ". $Mail->ErrorInfo;
	}

	$Mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    	)
	);
 ?>