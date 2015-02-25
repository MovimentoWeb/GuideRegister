<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

if (temPost()) {
    $projeto = array();

//Validação  NOME
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 5) {
        $projeto['curso'] = $_POST['nome'];
    } else {
        $temErros = true;
        $errosValidacao['nome'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do aluno'
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
                . '<h4>Nome de aluno inválido!</h4>'
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

//Validação  Carga Horaria
    if (isset($_POST['CargaH']) && strlen($_POST['CargaH']) > 5) {
        $projeto['CargaH'] = $_POST['CargaH'];
    } else {
        $temErros = true;
        $errosValidacao['CargaH'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite a carga horaria do curso determinado'
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

//Validação Pesquisa Aluno
    if (isset($_POST['pesq']) && strlen($_POST['pesq']) > 5) {
        $projeto['pesq'] = $_POST['pesq'];
    } else {
        $temErros = true;
        $errosValidacao['pesq'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do Curso'
                . '</div>';
    }    
    
}
$projeto = array(
    'id' => 0,
    'curso' => (isset($_POST['curso'])) ? $_POST['curso'] : '',
    'professor' => (isset($_POST['professor'])) ? $_POST['professor'] : '',
    'codigot' => (isset($_POST['codigot'])) ? $_POST['codigot'] : '',
    'CargaH' => (isset($_POST['CargaH'])) ? $_POST['CargaH'] : '',
    'Turno' => (isset($_POST['Turno'])) ? $_POST['Turno'] : '',
    'Periodo' => (isset($_POST['Periodo'])) ? $_POST['Periodo'] : '',
    'pesq' => (isset($_POST['pesq'])) ? $_POST['pesq'] : '',
);



if (temPost() && isset($_POST['pesquisaTurma'])) {
    $pesquisa = array();
    if (isset($_POST['pesquisaTurma']) && strlen($_POST['pesquisaTurma']) > 5) {
        $pesquisa['pesquisaTurma'] = $_POST['pesquisaTurma'];
    } else {
        $temErros = true;
        $errosValidacao['pesquisaTurma'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do Curso'
                . '</div>';
    }
}