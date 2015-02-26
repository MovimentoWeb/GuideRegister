<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

if (temPost()) {
    $projeto = array();

    if (isset($_POST['conteudoAviso']) && strlen($_POST['conteudoAviso']) >0) {
        $projeto['conteudoAviso'] = $_POST['conteudoAviso'];
    } else {
        $temErros = true;
        $errosValidacao['conteudoAviso'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Sem Conteúdo!</h4>'
                . 'Digite algo no conteúdo!'
                . '</div>';
    }
}