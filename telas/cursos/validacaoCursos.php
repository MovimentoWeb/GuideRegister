<?php
include_once 'crud/conexao.php';
include_once 'telas/cursos/crudCurso.php';
include_once 'telas/includes/funcoesDeApoio.php';

//Recuperar campos Preenchidos
$dadosCurso = array(
    'id' => 0,
    'nomeCurso' => (isset($_POST['nomeCurso'])) ? $_POST['nomeCurso'] : '',
    'chTotal' => (isset($_POST['chTotal'])) ? $_POST['chTotal'] : '',
    );

$temErros = false;
$errosValidacao = array();
$exibirTabela = FALSE;


//-------- Validaçao Cadastro de aluno -----------
if (temPost() && isset($_POST['cadCurso'])) {
    $dadosCurso = array();

    //Validação  Nome do Curso
    if (isset($_POST['nomeCurso']) && strlen($_POST['nomeCurso']) > 5) {
        $dadosCurso['nomeCurso'] = $_POST['nomeCurso'];
    } else {
        $temErros = true;
        $errosValidacao['nomeCurso'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de curso inválido!</h4>'
                . 'Digite corretamente o nome do curso'
                . '</div>';
    }

    //Validação Carga Horária
    if (isset($_POST['chTotal']) && strlen($_POST['chTotal']) >= 2) {
        $dadosCurso['chTotal'] = $_POST['chTotal'];
    } else {
        $temErros = TRUE;
        $errosValidacao['chTotal'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Carga Horária inválido!</h4>'
                . 'Digite um número de Carga horária correto'
                . '</div>';
    }


    if (!$temErros) {
        // Função de inserir no banco de dados
        inserirCurso($conexao, $dadosCurso);
        die();
    }
}

//-------- Validaçao Pesquisar aluno -----------
if (temPost() && isset($_POST['pesquisar'])) {

    //Validação  NOME
    if (isset($_POST['nomeAlunoPesquisa']) && strlen($_POST['nomeAlunoPesquisa']) > 2) {
        $dadosAlunos = $_POST['nomeAlunoPesquisa'];
    } else {
        $temErros = true;
        $errosValidacao['nomeAlunoPesquisa'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do aluno'
                . '</div>';
    }
    if (!$temErros) {
        // Select no banco de dados
        $listarAluno = listarAluno($conexao, $dadosAlunos);
        if ($listarAluno != NULL) {
            $exibirTabela = TRUE;
        }
    }
}

//-------- Validaçao Editar  aluno -----------
if (temPost() && isset($_POST['EditAluno'])) {
    $dadosAlunos = array();
    $dadosAlunos['idAluno'] = $_GET['idAluno'];

    //Validação  NOME
    if (isset($_POST['nomeAluno']) && strlen($_POST['nomeAluno']) > 5) {
        $dadosAlunos['nomeAluno'] = $_POST['nomeAluno'];
    } else {
        $temErros = true;
        $errosValidacao['nomeAluno'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Atenção!</h4>'
                . 'Digite corretamente o nome do aluno'
                . '</div>';
    }

    //Validação matricula
    if (isset($_POST['matricula']) && strlen($_POST['matricula']) >= 2) {
        $dadosAlunos['matricula'] = $_POST['matricula'];
    } else {
        $temErros = TRUE;
        $errosValidacao['matricula'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Matrícula inválido!</h4>'
                . 'Digite um número de matricula correto'
                . '</div>';
    }

    //Validação data nascimento
    if (isset($_POST['dtNascimento']) && strlen($_POST['dtNascimento']) >= 10) {
        $dadosAlunos['dtNascimento'] = $_POST['dtNascimento'];
    } else {
        $temErros = true;
        $errosValidacao['dtNascimento'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Data de nascimento inválida!</h4>'
                . 'Data de nascimento deve seguir o formato: <strong>00/00/0000</strong>'
                . '</div>';
    }

    //Validação rg
    if (isset($_POST['rg']) && strlen($_POST['rg']) >= 5) {
        $dadosAlunos['rg'] = $_POST['rg'];
    } else {
        $temErros = TRUE;
        $errosValidacao['rg'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite um número de RG no formato: <strong>999.888.777</strong>'
                . '</div>';
    }

    //Validação cpf
    if (isset($_POST['cpf']) && strlen($_POST['cpf']) == 11) {
        $dadosAlunos['cpf'] = $_POST['cpf'];
    } else {
        $temErros = TRUE;
        $errosValidacao['cpf'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>CPF inválido!</h4>'
                . 'CPF inválido! Digite um número de RG no formato: <strong>11199988877</strong>'
                . '</div>';
    }

    if (!$temErros) {
        // Função de inserir no banco de dados
        editarAluno($conexao, $dadosAlunos);
    }
}

//-------- Validaçao Excluir Aluno-----------
//-------- Detalhes do Aluno -----------

if (isset($_GET['idAluno'])) {
    $listaAluno = array();
    $listaAluno['idAluno'] = $_GET['idAluno'];

    $dadosAluno = listarAlunoPorId($conexao, $listaAluno['idAluno']);
}




