<?php

	$errors = array();

	// Check if name has been entered
	if (!isset($_POST['nome'])) {
		$errors['nome'] = 'Informe seu nome';
	}

	// Check if email has been entered and is valid
	if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Informe um email válido';
	}

    // Check if agencia has been entered
    if (!isset($_POST['agencia'])) {
        $errors['nome'] = 'Informe sua agência/empresa';
    }

    // Check if servico has been entered
    if (!isset($_POST['servico'])) {
        $errors['nome'] = 'Informe um serviço';
    }

    // Check if previsao has been entered
    if (!isset($_POST['previsao'])) {
        $errors['nome'] = 'Informe uma previsão para veiculação';
    }

	//Check if message has been entered
	if (!isset($_POST['mensagem'])) {
		$errors['massage'] = 'Nos escreva uma mensagem!';
	}

	$errorOutput = '';

	if(!empty($errors)){

		$errorOutput .= '<div class="alert alert-danger alert-dismissible" role="alert">';
 		$errorOutput .= '<button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>';

		$errorOutput  .= '<ul>';

		foreach ($errors as $key => $value) {
			$errorOutput .= '<li>'.$value.'</li>';
		}

		$errorOutput .= '</ul>';
		$errorOutput .= '</div>';

		echo $errorOutput;
		die();
	}



	$nome = $_POST['nome'];
	$email = $_POST['email'];
    $agencia = $_POST['agencia'];
    $servico = $_POST['servico'];
    $previsao = $_POST['previsao'];
    $quantidade = $_POST['quantidade'];
	$mensagem = $_POST['mensagem'];
	$from = $email;
	$to = 'contato@publig.com.br';
	$subject = 'Pedido de Orçamento';

	$body = "\n Nome: $nome \n
	        E-Mail: $email \n
            Agência: $agencia \n
            Serviço: $servico \n
            Previsão para Veiculação: $previsao \n
            Quantidade: $quantidade \n
	        Mensagem:\n $mensagem";


	//send the email
	$result = '';
	if (mail ($to, $subject, $body)) {
		$result .= '<div class="alert alert-success alert-dismissible" role="alert">';
 		$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>';
		$result .= 'Solicitação de orçamento enviado! Em breve, entraremos em contato com você!';
		$result .= '</div>';

		echo $result;
		die();
	}

	$result = '';
	$result .= '<div class="alert alert-danger alert-dismissible" role="alert">';
	$result .= '<button type="button" class="close" data-dismiss="alert" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>';
	$result .= 'Alguma coisa ocorreu durante o envio da mensagem. Por favor, tente novamente mais tarde!';
	$result .= '</div>';

	echo $result;
