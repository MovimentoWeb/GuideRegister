<?php

include_once 'banco.php';
include_once 'funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

$exibirTabela = TRUE;
if (temPost()) {
    $varificacao = array();

//Validação do E-MAIL
    if (isset($_POST['email']) && strlen($_POST['email']) > 0) {
        $varificacao['email'] = $_POST['nome'];
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
    $verificacao['prioridade'] = $_POST['prioridade'];
    if (isset($_POST['concluida'])) {
        $verificacao['concluida'] = 1;
    } else {
        $verificacao['concluida'] = 0;
    }

    if (!$temErros) {
        inserirTarefa($conexao, $verificacao);
        header('Location: validacaologin.php');
        die();
    }
}

$lista_validacaologins = buscarTarefas($conexao);

$verificacao = array(
    'id' => 0,
    'email' => (isset($_POST['email'])) ?
            $_POST['email'] : '',
    'senha' => (isset($_POST['senha'])) ? $_POST['senha'] : ''
);
include "template.php";