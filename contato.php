<?php

//Defino a Chave do meu site
$secret_key = '6LdKvpwUAAAAAFd_1-HXSbIu7WYqYYYJmzITD6xe';

//Pego a validação do Captcha feita pelo usuário
$recaptcha_response = $_POST['g-recaptcha-response'];

// Verifico se foi feita a postagem do Captcha 
if(isset($recaptcha_response)){
		
	// Valido se a ação do usuário foi correta junto ao google
	$answer = 
		json_decode(
			file_get_contents(
				'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.
				'&response='.$_POST['g-recaptcha-response']
			)
		);

	// Se a ação do usuário foi correta executo o restante do meu formulário
	if($answer->success) {
        if (isset($_POST["telefone"])) {
            $name = $_POST["message-name"];
            $email = $_POST["message-email"];
            $message = "<p>Mensagem de: ".$name." Número de contato: ".
            $_POST["telefone"]."</p>".$_POST["message"]."</p>";
            $sender = "contato@gustavosouza.net";	
            $recipient = "contato@gustavosouza.net";
            $replyto = "$email";
            $subject = "Contato solicitado pelo site gustavosouza.net";
            $content = "Nome = $name \n";
            $content .= "Email = $email \n";
            $content .= "Assunto = $subject \n";
            $content .= "$message \n";
        
            $headers = implode ( "\n",array ( "From: $sender", "Reply-To: $replyto", "Return-Path: $sender","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
            if (mail ($recipient, $subject, nl2br($content), $headers)) {
                echo "200";
                }
        } else {
            $email = $_POST["message-email"];
            $message = "<p>Mensagem de: ".$email.
            "</p><br><p>".$_POST["message"]."</p>";
            $sender = "contato@gustavosouza.net";	
            $recipient = "contato@gustavosouza.net";
            $replyto = "$email";
            $subject = "Contato solicitado pelo site gustavosouza.net";
            $content = "Email = $email \n";
            $content .= "Assunto = $subject \n";
            $content .= "$message \n";
        
            $headers = implode ( "\n",array ( "From: $sender", "Reply-To: $replyto", "Return-Path: $sender","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
            if (mail ($recipient, $subject, nl2br($content), $headers)) {
                echo "200";
                }
        }
    } else {
        echo "roboerro";
    }

}