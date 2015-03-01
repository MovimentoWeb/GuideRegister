<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

if (temPost()) {
    $projeto = array();

//Validação  NOME
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 5) {
        $projeto['nome'] = $_POST['nome'];
    } else {
        $temErros = true;
        $errosValidacao['nome'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Digite uma PA valida!</h4>'
                . 'Digite corretamente a PA do aluno'
                . '</div>';
    }

    //Validação  professor
    if (isset($_POST['professor']) && strlen($_POST['professor']) > 5) {
        $projeto['professor'] = $_POST['professor'];
    } else {
        $temErros = true;
        $errosValidacao['professor'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome do professor inválido!</h4>'
                . 'Digite corretamente o nome do Professor'
                . '</div>';
    }
//Validação Codigo Turma
    if (isset($_POST['codigot']) && strlen($_POST['codigot']) < 0) {
        $projeto['codigot'] = $_POST['codigot'];
    } else {
        $temErros = TRUE;
        $errosValidacao['codigot'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite o codigo da Turma: <strong>0012301</strong>'
                . '</div>';
    }



    //Validação  Turno
    if (isset($_POST['Turno']) && strlen($_POST['Turno']) > 5) {
        $projeto['Turno'] = $_POST['Turno'];
    } else {
        $temErros = true;
        $errosValidacao['Turno'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o turno da Turma'
                . '</div>';
    }

    //Validação Periodo
    if (isset($_POST['Periodo']) && strlen($_POST['Periodo']) > 5) {
        $projeto['Periodo'] = $_POST['Periodo'];
    } else {
        $temErros = true;
        $errosValidacao['Periodo'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o periodo do Curso'
                . '</div>';
    }
    if (!$temErros) {
        header('Location: index.php?pg=turmaCadastrar');
        die();
    }



//Validação da pesquisa
    if (isset($_POST['pesquisaTurma']) && strlen($_POST['pesquisaTurma']) > 5) {
        $projeto['pesquisaTurma'] = $_POST['pesquisaTurma'];
    } else {
        $temErros = true;
        $errosValidacao['pesquisaTurma'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite sua pesquisa nos campos abaixo'
                . '</div>';
    }
}



$projeto = array(
    'id' => 0,
    'nome' => (isset($_POST['nome'])) ? $_POST['nome'] : '',
    'professor' => (isset($_POST['professor'])) ? $_POST['professor'] : '',
    'codigot' => (isset($_POST['codigot'])) ? $_POST['codigot'] : '',
    'CargaH' => (isset($_POST['CargaH'])) ? $_POST['CargaH'] : '',
    'Turno' => (isset($_POST['Turno'])) ? $_POST['Turno'] : '',
    'Periodo' => (isset($_POST['Periodo'])) ? $_POST['Periodo'] : '',
    'pesquisaTurma' => (isset($_POST['pesquisaTurma'])) ? $_POST['pesquisaTurma'] : '',
    'nomeDisciplina' => (isset($_POST['nomeDisciplina'])) ? $_POST['nomeDisciplina'] : '',
    'codigoDisciplina' => (isset($_POST['codigoDisciplina'])) ? $_POST['codigoDisciplina'] : '',
);
