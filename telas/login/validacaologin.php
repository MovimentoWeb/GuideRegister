<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

$exibirTabela = TRUE;
if (temPost()) {
    $verificacao = array();

//Validação do E-MAIL
    if (isset($_POST['email']) && strlen($_POST['email']) > 0) {
        $verificacao['email'] = $_POST['nome'];
    } else {
        $temErros = true;
        $errosValidacao['email'] = 'O email de login é obrigatório!';
    }

//Validação da SENHA  
    if (isset($_POST['senha']) && strlen($_POST['senha']) > 0) {
        $verificacao['senha'] = $_POST['senha'];
    } else {
        $temErros = true;
        $errosValidacao['senha'] = 'A senha de login é obrigatória!';
    }
    if (!$temErros) {
        header('Location: index.php?pg=login&opcao=loginInicial');
        die();
    }
}
$verificacao = array(
    'id' => 0,
    'email' => (isset($_POST['email'])) ?
            $_POST['email'] : '',
    'senha' => (isset($_POST['senha'])) ? $_POST['senha'] : ''
);