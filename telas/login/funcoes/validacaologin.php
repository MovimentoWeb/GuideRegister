<?php

include_once 'banco.php';
include_once 'funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

$exibirTabela = TRUE;
if (temPost()) {
    $tarefa = array();

//ValidaÃ§Ã£o do NOME
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 0) {
        $tarefa['nome'] = $_POST['nome'];
    } else {
        $temErros = true;
        $errosValidacao['nome'] = 'O nome da tarefa Ã© obrigatÃ³rio!';
    }

//ValidaÃ§Ã£o da DESCRIÃ‡ÃƒO  
    if (isset($_POST['descricao']) && strlen($_POST['descricao']) > 0) {
        $tarefa['descricao'] = $_POST['descricao'];
    } else {
        $temErros = true;
        $errosValidacao['descricao'] = 'A descriÃ§Ã£o da tarefa Ã© obrigatÃ³ria!';
    }
    $tarefa['prioridade'] = $_POST['prioridade'];
    if (isset($_POST['concluida'])) {
        $tarefa['concluida'] = 1;
    } else {
        $tarefa['concluida'] = 0;
    }

    if (!$temErros) {
        inserirTarefa($conexao, $tarefa);
        header('Location: tarefa.php');
        die();
    }
}

$lista_tarefas = buscarTarefas($conexao);

$tarefa = array(
    'id' => 0,
    'nome' => (isset($_POST['nome'])) ?
            $_POST['nome'] : '',
    'descricao' => (isset($_POST['descricao'])) ? $_POST['descricao'] : '',
    'prazo' => (isset($_POST['prazo'])) ? $_POST['prazo'] : '',
    'prioridade' => (isset($_POST['prioridade'])) ?
            $_POST['prioridade'] : 1,
    'concluida' => (isset($_POST['concluida'])) ?
            $_POST['concluida'] : ''
);
include "template.php";