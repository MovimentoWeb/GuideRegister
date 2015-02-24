<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

$exibirTabela = TRUE;
if (temPost()) {
    $verificacao = array();

//Validação do E-MAIL
    if (isset($_POST['email']) && strlen($_POST['email']) > 10) {
        $verificacao['email'] = $_POST['email'];
    } else {
        $temErros = true;
        $errosValidacao['email'] = ''
        . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>E-mail inválido!</h4>'
                . 'Digite corretamente o E-mail'
                . '</div>';
    }

//Validação da SENHA  
    if (isset($_POST['senha']) && strlen($_POST['senha']) >=8) {
        $verificacao['senha'] = $_POST['senha'];
    } else {
        $temErros = true;
        $errosValidacao['senha'] = ''
            . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Senha inválida!</h4>'
                . 'Digite corretamente a Senha'
                . '</div>';;
    }
    //Validação da esqueciMinhaSenha  
    if (isset($_POST['esqueciMinhaSenha']) && strlen($_POST['esqueciMinhaSenha']) >=8) {
        $verificacao['esqueciMinhaSenha'] = $_POST['esqueciMinhaSenha'];
    } else {
        $temErros = true;
        $errosValidacao['esqueciMinhaSenha'] = ''
            . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Senha inválida!</h4>'
                . 'Digite corretamente a Senha'
                . '</div>';;
    }
    //Validação da NOVASENHA  
    if (isset($_POST['novasenha']) && strlen($_POST['novasenha']) >=10) {
        $verificacao['novasenha'] = $_POST['novasenha'];
    } else {
        $temErros = true;
        $errosValidacao['novasenha'] = ''
            . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nova Senha inválida!</h4>'
                . 'Digite corretamente a NoSva Senha'
                . '</div>';;
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
    'senha' => (isset($_POST['senha'])) ? $_POST['senha'] : '',
    'novasenha' => (isset($_POST['novasenha'])) ? $_POST['senha'] : ''
    
);
