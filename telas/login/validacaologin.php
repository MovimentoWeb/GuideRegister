<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

$exibirTabela = TRUE;

//Validação Formulário de login
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
    if (isset($_POST['senha']) && strlen($_POST['senha']) >= 8) {
        $verificacao['senha'] = $_POST['senha'];
    } else {
        $temErros = true;
        $errosValidacao['senha'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Senha inválida!</h4>'
                . 'Digite corretamente a Senha'
                . '</div>';
    }
    if (!$temErros) {
       // header('Location: index.php?pg=login&opcao=loginInicial');
       // die();
    }
//Validação formulário - ESQUECI MINHA SENHA
    if (temPost() && isset($_POST['email'])) {
        $verificacao = array();
        if (isset($_POST['email']) && strlen($_POST['email']) > 3) {
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
    }

//Validação da NOVA SENHA  
    if (temPost() && isset($_POST['novasenha'])) {
        $verificacao = array();

        if (isset($_POST['novasenha']) && strlen($_POST['novasenha']) >= 10) {
            $verificacao['novasenha'] = $_POST['novasenha'];
            
            //tem que está dentro da função recuperar senha
        echo '<div class="alert alert-success">'
        . '<button type="button" class="close" data-dismiss="alert">×</button>'
        . '<h4>Email enviado com sucesso!</h4>'
        . 'Verifique sua caixa de E-mail para ver sua nova senha.'
        . '</div>';
        } else {
            $temErros = true;
            $errosValidacao['novasenha'] = ''
                    . '<div class="alert alert-error">'
                    . '<button type="button" class="close" data-dismiss="alert">×</button>'
                    . '<h4>Nova Senha inválida!</h4>'
                    . 'Digite corretamente a Nova Senha'
                    . '</div>';
        }
    }
//Validação da CONFIRMARSENHA  
    if (temPost() && isset($_POST['confirmasenha'])) {
        $verificacao = array();
        if (isset($_POST['confirmasenha']) && strlen($_POST['confirmasenha']) >= 10) {
            $verificacao['confirmasenha'] = $_POST['confirmasenha'];
        } else {
            $temErros = true;
            $errosValidacao['confirmasenha'] = ''
                    . '<div class="alert alert-error">'
                    . '<button type="button" class="close" data-dismiss="alert">×</button>'
                    . '<h4>Nova Senha inválida!</h4>'
                    . 'Digite corretamente a Nova Senha'
                    . '</div>';
        }
    }

    $verificacao = array(
        'id' => 0,
        'email' => (isset($_POST['email'])) ? $_POST['email'] : '',
        'senha' => (isset($_POST['senha'])) ? $_POST['senha'] : '',
        'novasenha' => (isset($_POST['novasenha'])) ? $_POST['novasenha'] : '',
        'confirmasenha' => (isset($_POST['confirmasenha'])) ? $_POST['confirmasenha'] : ''
    );
}