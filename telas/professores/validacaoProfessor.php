<?php
include_once 'crud/conexao.php';
include_once 'telas/professores/crudProfessor.php';
include_once 'telas/includes/funcoesDeApoio.php';

//Recuperar campos Preenchidos
$dadosProfessor = array(
    'id' => 0,
    'nomeUsuario' => (isset($_POST['nomeUsuario'])) ? $_POST['nomeUsuario'] : '',
    'dtNascimento' => (isset($_POST['dtNascimento'])) ? $_POST['dtNascimento'] : '',
    'rg' => (isset($_POST['rg'])) ? $_POST['rg'] : '',
    'cpf' => (isset($_POST['cpf'])) ? $_POST['cpf'] : '',
    'dtAdmissao' => (isset($_POST['dtAdmissao'])) ? $_POST['dtAdmissao'] : '',
    );

$temErros = false;
$errosValidacao = array();
$exibirTabela = FALSE;

if (temPost() && isset($_POST['cadProfessor'])) {
    $dadosProfessor = array();

//Validação  NOME
    if (isset($_POST['nomeUsuario']) && strlen($_POST['nomeUsuario']) > 5) {
        $dadosProfessor['nomeUsuario'] = $_POST['nomeUsuario'];
    } else {
        $temErros = true;
        $errosValidacao['nomeUsuario'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome inválido!</h4>'
                . 'Digite corretamente o nome do professor'
                . '</div>';
    }

//Validação data nascimento
    if (isset($_POST['dtNascimento']) && strlen($_POST['dtNascimento']) >= 10) {
        $dadosProfessor['dtNascimento'] = $_POST['dtNascimento'];
    } else {
        $temErros = true;
        $errosValidacao['dtNascimento'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Data de nascimento inválida!</h4>'
                . 'Data de nascimento deve seguir o formato: <strong>01/01/2001</strong>'
                . '</div>';
    }

//Validação rg
    if (isset($_POST['rg']) && strlen($_POST['rg']) >= 7) {
        $dadosProfessor['rg'] = $_POST['rg'];
    } else {
        $temErros = TRUE;
        $errosValidacao['rg'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite um número de RG no formato: <strong>1.111.111</strong>'
                . '</div>';
    }

//Validação cpf
    if (isset($_POST['cpf']) && strlen($_POST['cpf']) >= 8) {
        $dadosProfessor['cpf'] = $_POST['cpf'];
    } else {
        $temErros = TRUE;
        $errosValidacao['cpf'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>CPF inválido!</h4>'
                . 'Digite um número de RG no formato: <strong>111.111.111-11</strong>'
                . '</div>';
    }

//validação data de admissão
    if (isset($_POST['dtAdmissao']) && strlen($_POST['dtAdmissao']) >= 8) {
        $dadosProfessor['dtAdmissao'] = $_POST['dtAdmissao'];
    } else {
        $temErros = TRUE;
        $errosValidacao['dtAdmissao'] = ' '
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Data de admissão inválido!</h4>'
                . 'Digite a Data de admissão: <strong>01/01/2001</strong>'
                . '</div>';
    }

    if (!$temErros) {
        // Função de inserir no banco de dados
        inserirProfessor($conexao, $dadosProfessor);
        die();
    }
}

//-------- Validaçao Pesquisar professor -----------

if (temPost() && isset($_POST['pesquisar'])) {
    
//Validação da nome professor
    if (isset($_POST['nomeUsuarioPesquisa']) && strlen($_POST['nomeUsuarioPesquisa']) > 2) {
        $dadosProfessor = $_POST['nomeUsuarioPesquisa'];
    } else {
        $temErros = true;
        $errosValidacao['nomeUsuarioPesquisa'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Pesquisa invalida!</h4>'
                . 'Digite sua pesquisa nos campos abaixo'
                . '</div>';
    }
    if (!$temErros) {
        // Select no banco de dados
        $listarProfessor = listarProfessor($conexao, $dadosProfessor);
        if ($listarProfessor != NULL) {
        $exibirTabela = TRUE;
        }
    }
}


//-------- Validaçao Editar  Professor -----------
if (temPost() && isset($_POST['EditProfessor'])) {
    $dadosProfessor = array();
    $dadosProfessor['idUsuario'] = $_GET['idUsuario'];
    
    //Validação  NOME
    if (isset($_POST['nomeUsuario']) && strlen($_POST['nomeUsuario']) >= 3) {
        $dadosProfessor['nomeUsuario'] = $_POST['nomeUsuario'];
    } else {
        $temErros = true;
        $errosValidacao['nomeUsuario'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome inválido!</h4>'
                . 'Digite corretamente o nome do Professor'
                . '</div>';
    }

    //Validação data nascimento
    if (isset($_POST['dtNascimento']) && strlen($_POST['dtNascimento']) >= 8) {
        $dadosProfessor['dtNascimento'] = $_POST['dtNascimento'];
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
        $dadosProfessor['rg'] = $_POST['rg'];
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
    if (isset($_POST['cpf']) && strlen($_POST['cpf']) >= 11) {
        $dadosProfessor['cpf'] = $_POST['cpf'];
    } else {
        $temErros = TRUE;
        $errosValidacao['cpf'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>CPF inválido!</h4>'
                . 'CPF inválido! Digite um número de RG no formato: <strong>111.999.888-77</strong>'
                . '</div>';
    }
    
    //Validação data admissão
    if (isset($_POST['dtAdmissao']) && strlen($_POST['dtAdmissao']) >= 8) {
        $dadosProfessor['dtAdmissao'] = $_POST['dtAdmissao'];
    } else {
        $temErros = TRUE;
        $errosValidacao['dtAdmissao'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>CPF inválido!</h4>'
                . 'CPF inválido! Digite um número de RG no formato: <strong>111.999.888-77</strong>'
                . '</div>';
    }

    if (!$temErros) {
        // Função de inserir no banco de dados
        editarProfessor($conexao, $dadosProfessor);

        die();
    }
}

//-------- Detalhes do Professor -----------

if (isset($_GET['idUsuario'])) {
    $listaProfessor = array();
    $listaProfessor['idUsuario'] = $_GET['idUsuario'];
    
    $dadosProfessor = listarProfessorPorId($conexao, $listaProfessor['idUsuario']);
}


