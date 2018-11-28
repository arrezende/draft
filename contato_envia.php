<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	switch($_GET["act"]){
			case "contato":
				$varnome	=$_POST["txt_nome"];
				$varemail	=$_POST["txt_email"];
				$vartelefone	=$_POST["txt_telefone"];
				$varassunto	=$_POST["txt_assunto"];
				$varmsg		=$_POST["area_msg"];
				require("inc/class.phpmailer.php");
				$mail = new PHPMailer();
				$mail->IsSMTP(); // Define que a mensagem será SMTP
				$mail->Host = "mail.ubikabrasil.com.br"; // Endereço do servidor SMTP
				$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
				$mail->Username = 'mail@bloomin.com.br'; // Usuário do servidor SMTP
				$mail->Port ="587";
				$mail->Password = 'bloomin102030'; // Senha do servidor SMTP
				$mail->From = 'mail@bloomin.com.br'; // Seu e-mail
				$mail->FromName = "Contato [Site] - ".$varnome; 
				// Define os destinatário(s)
				//AddAddress('juliano@jwdesign.com.br', 'Fulano da Silva');
				
                $mail->AddAddress("administracao@draftprojetos.com.br");                
				$mail->AddReplyTo($varemail);
				//$mail->AddCC('junior@crismar.com.br'); // Copia
				//$mail->AddBCC('fulano@dominio.com.br', 'Fulano a Silva'); // Cópia Oculta
				// Define os dados técnicos da Mensagem
				$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
				$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
				$mail->Subject  = "Contato - Site"; // Assunto da mensagem
				$mail->Body = "<strong>Nome: </strong>".$varnome."<br /><strong>Telefone:</strong> ".$vartelefone."<br /><strong>E-mail: </strong>".$varemail."<br /><strong>Assunto: </strong>".$varassunto."<br /><strong>Mensagem: </strong>".$varmsg;
				$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n";
				//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
				// Envia o e-mail
				$enviado = $mail->Send();
				// Limpa os destinatários e os anexos
				$mail->ClearAllRecipients();
				$mail->ClearAttachments();
				// Exibe uma mensagem de resultados
				
				if ($enviado) {
				echo("<script>alert('Mensagem Enviada!');</script>");
				echo("<script>window.history.back();</script>");
				} else {
				echo "Não foi possível enviar o e-mail.<br /><br />";
				
				echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
				}
		break;
        case "home":
				$varnome	=$_POST["txt_nome"];
				$varemail	=$_POST["txt_email"];
				$vartelefone	=$_POST["txt_telefone"];
				$varempresa	=$_POST["txt_empresa"];
				$varendereco	=$_POST["txt_endereco"];
				$varmsg		=$_POST["area_msg"];
				require("inc/class.phpmailer.php");
				$mail = new PHPMailer();
				$mail->IsSMTP(); // Define que a mensagem será SMTP
				$mail->Host = "mail.ubikabrasil.com.br"; // Endereço do servidor SMTP
				$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
				$mail->Username = 'mail@bloomin.com.br'; // Usuário do servidor SMTP
				$mail->Port ="587";
				$mail->Password = 'bloomin102030'; // Senha do servidor SMTP
				$mail->From = 'mail@bloomin.com.br'; // Seu e-mail
				$mail->FromName = "Contato [Site] - ".$varnome;  // Seu nome
				// Define os destinatário(s)
				//AddAddress('juliano@jwdesign.com.br', 'Fulano da Silva');
				
                $mail->AddAddress("arrezende@gmail.com");   
                //$mail->AddAddress("atendimento@athosvisto.com.br");
				$mail->AddReplyTo($varemail);
				//$mail->AddCC('junior@crismar.com.br'); // Copia
				//$mail->AddBCC('fulano@dominio.com.br', 'Fulano a Silva'); // Cópia Oculta
				// Define os dados técnicos da Mensagem
				$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
				$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
				$mail->Subject  = "Contato - Site"; // Assunto da mensagem
				$mail->Body = "<strong>Nome: </strong>".$varnome."<br /><strong>E-mail:</strong> ".$varemail."<br /><strong>Telefone: </strong>".$vartelefone."<br /><strong>Empresa: </strong>".$varempresa."<br /><strong>Endereço: </strong>".$varendereco."<br /><strong>Mensagem: </strong>".$varmsg;
				$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n";
				//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
				// Envia o e-mail
				$enviado = $mail->Send();
				// Limpa os destinatários e os anexos
				$mail->ClearAllRecipients();
				$mail->ClearAttachments();
				// Exibe uma mensagem de resultados
				
				if ($enviado) {
				echo("<script>alert('Mensagem Enviada!');</script>");
				echo("<script>window.location = 'http://www.chentulho.com.br/index.php?src=orcamento'</script>");
				} else {
				echo "Não foi possível enviar o e-mail.<br /><br />";
				
				echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
				}
		break;
          case "orcamento-de-terraplanagem":
				$varnome	=$_POST["txt_nome"];
				$varemail	=$_POST["txt_email"];
				$vartelefone	=$_POST["txt_telefone"];
				$varempresa	=$_POST["txt_empresa"];
				$varendereco	=$_POST["txt_endereco"];
				$varmsg		=$_POST["area_msg"];
				require("inc/class.phpmailer.php");
				$mail = new PHPMailer();
				$mail->IsSMTP(); // Define que a mensagem será SMTP
				$mail->Host = "mail.chentulho.com.br"; // Endereço do servidor SMTP
				$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
				$mail->Username = 'mailsender@chentulho.com.br'; // Usuário do servidor SMTP
				$mail->Port ="587";
				$mail->Password = 'ch102030'; // Senha do servidor SMTP
				$mail->From = 'mailsender@chentulho.com.br'; // Seu e-mail
				$mail->FromName = "Orcamento de Terraplanagem [Site] - ".$varnome; // Seu nome
				// Define os destinatário(s)
				//AddAddress('juliano@jwdesign.com.br', 'Fulano da Silva');
				
                $mail->AddAddress("chentulhoeterraplenagem@hotmail.com");
                $mail->AddCC("contato@chentulho.com.br");
                //$mail->AddAddress("atendimento@athosvisto.com.br");
				$mail->AddReplyTo($varemail);
				//$mail->AddCC('junior@crismar.com.br'); // Copia
				//$mail->AddBCC('fulano@dominio.com.br', 'Fulano a Silva'); // Cópia Oculta
				// Define os dados técnicos da Mensagem
				$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
				$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
				$mail->Subject  = "Contato - Site"; // Assunto da mensagem
				$mail->Body = "<strong>Nome: </strong>".$varnome."<br /><strong>E-mail:</strong> ".$varemail."<br /><strong>Telefone: </strong>".$vartelefone."<br /><strong>Empresa: </strong>".$varempresa."<br /><strong>Endereço: </strong>".$varendereco."<br /><strong>Mensagem: </strong>".$varmsg;
				$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n";
				//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
				// Envia o e-mail
				$enviado = $mail->Send();
				// Limpa os destinatários e os anexos
				$mail->ClearAllRecipients();
				$mail->ClearAttachments();
				// Exibe uma mensagem de resultados
				
				if ($enviado) {
				echo("<script>alert('Mensagem Enviada!');</script>");
				echo("<script>window.location = 'http://www.chentulho.com.br/index.php?src=orcamento'</script>");
				} else {
				echo "Não foi possível enviar o e-mail.<br /><br />";
				
				echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
				}
		break;
    }
?>