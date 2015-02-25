<?php
include_once 'telas/aluno/validacaoAluno.php';
if (!isset($_GET['opcao'])) {
    include_once 'telas/inicial.php';
} else {
    switch ($_GET['opcao']) {
        case'cadastrar':
            ?>
            <div class="conteinerAluno">
                <form class="well" method="post">
                    <legend><span class="fa-user-add"></span> Cadastro de alunos</legend>
                    <span class="help-block">Preencha corretamente os campos abaixo com os dados do aluno. </span>
                    <ul>
                        <li>
                            <label>Nome do aluno<br />
                                <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nome']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="nome" class="input-block-level" value="<?php echo $projeto['nome']; ?>" placeholder="Nome"></label>
                            </label>
                        </li>
                        <li class="row-fluid">
                            <label class="span3">Matrícula<br />
                                <?php if ($temErros && isset($errosValidacao['matricula'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['matricula']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="dtNascimento" class="input-block-level" value="<?php echo $projeto['dtNascimento']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label class="span3">Data de Nascimento<br />
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="dtNascimento" class="input-block-level" value="<?php echo $projeto['dtNascimento']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label class="span3">RG<br />
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="rg" class="input-block-level" value="<?php echo $projeto['rg']; ?>" placeholder="RG">
                            </label>



                            <label class="span3">CPF<br />
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="cpf" class="input-block-level" value="<?php echo $projeto['cpf']; ?>" placeholder="CPF">
                            </label>
                        </li>

                        <li>
                            <label>Informe o turno<br />
                                <select name="selectTurno">
                                    <option>Selecione um turno</option>
                                    <option>Manhã</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                </select>
                            </label>
                        </li>

                        <li>
                            <label>Informe o curso<br />
                                <select name="selectCurso">
                                    <option>Selecione um curso</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </label>
                        </li>

                    </ul>
                    <a href="index.php" class="btn btn-warning"><span class="fa-home"></span> Voltar a página inicial</a>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadastrar</button>
                </form>
            </div>
            <?php
            break;

        case'editarAluno':
            ?>
            <div class="conteinerAluno">
                <form class="well" method="post">
                    <legend><span class="fa-user-add"></span> Cadastro de alunos</legend>
                    <span class="help-block">Preencha corretamente os campos abaixo com os dados do aluno. </span>
                    <ul>
                        <li>
                            <label>Nome do aluno<br />
                                <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nome']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="nome" class="input-block-level" value="<?php echo $projeto['nome']; ?>" placeholder="Nome"></label>
                            </label>
                        </li>
                        <li class="row-fluid">
                            <label class="span3">Matrícula<br />
                                <?php if ($temErros && isset($errosValidacao['matricula'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['matricula']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="dtNascimento" class="input-block-level" value="<?php echo $projeto['dtNascimento']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label class="span3">Data de Nascimento<br />
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="dtNascimento" class="input-block-level" value="<?php echo $projeto['dtNascimento']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label class="span3">RG<br />
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="rg" class="input-block-level" value="<?php echo $projeto['rg']; ?>" placeholder="RG">
                            </label>



                            <label class="span3">CPF<br />
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="cpf" class="input-block-level" value="<?php echo $projeto['cpf']; ?>" placeholder="CPF">
                            </label>
                        </li>

                        <li>
                            <label>Informe o turno<br />
                                <select name="selectTurno">
                                    <option>Selecione um turno</option>
                                    <option>Manhã</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                </select>
                            </label>
                        </li>

                        <li>
                            <label>Informe o curso<br />
                                <select name="selectCurso">
                                    <option>Selecione um curso</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </label>
                        </li>

                    </ul>
                    <a href="index.php" class="btn btn-warning"><span class="fa-home"></span> Voltar a página inicial</a>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadastrar</button>
                </form>
            </div>
            <?php
            break;

        case'pesquisar':
            ?>
            <div class="PesquisarAluno">
                <div class="well">  
                    <form class="form-search" method="POST">
                        <legend><span class="fa-search3"></span>  Pesquisar Alunos</legend>
                        <span class="help-block">Digite um nome de aluno para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input type="text" class="search-query input-block-level">
                                    <button type="submit" class="btn btn-primary">Busca</button>
                                </div>
                            </li>
                        </ul>  
                    </form>


                    <!--        Resultado das pesquisas-->

                    <table class="table table-hover">
                        <caption>Título dos resultados</caption>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Detalhes</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Resultado 1</td>
                                <td>
                                    <p><strong>Turma:</strong> Nome da turma + PA</p>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                            Ação
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- Links de menu dropdown -->
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Resultado 2</td>
                                <td>Detalhes do resultado 2</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                            Ação
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- Links de menu dropdown -->
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Resultado 3</td>
                                <td>Detalhes do resultado 3</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                            Ação
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- Links de menu dropdown -->
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Resultado 4</td>
                                <td>Detalhes do resultado 4</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                            Ação
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="?pg=aluno&opcao=dadosAluno" class="fa-delicious"> Ver detalhes</a></li>
                                            <li><a href="#" class="fa-remove"> Desativar Aluno</a></li>
                                            <li><a href="#" class="fa-aid"> Adicionar justificativa</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <?php
            break;

        case 'dadosAluno':
            ?>
            <div class="containerAluno ">
                <form class="well">
                    <legend><span class="icon-tasks"></span> Dados Da Turma</legend>
                    Turma:
                    <label for=""></label>
                    Professor:
                    <label for=""></label>
                    Codigo da Turma:
                    <label for=""></label>
                    Carga Horaria: 
                    <label for=""></label>
                    Turno: 
                    <label for=""></label>
                    Periodo: 
                    <label for=""></label>

                    <input type="button" class=" btn btn-primary span2" value="Enviar" />
                </form>
            </div>

            <?php
            break;

        case 'AtaFrequencia':
            ?>
            <div class="well frequencia">
                <legend><span class="fa-user-add"></span> Ata de frequência</legend> <span class="label">Exibir Nome curso - exibir dia</span>
                <form action="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Mat</th>
                                <th>Nome</th>
                                <th><span class="fa-checkmark2"></span></th>
                                <th><span class="fa-blocked"></span></th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>556</td>
                                <td>Reginaldo José</td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="compareceu" value="">

                                    </label>
                                </td>
                                <td>
                                    <label class="radio">
                                        <input type="radio" name="faltou"  value="" >
                                    </label>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="label" data-toggle="dropdown" href="#">
                                            <span class="fa-comments"></span>
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="?pg=aluno&opcao=dadosAluno" class="fa-delicious"> Ver detalhes</a></li>
                                            <li><a href="#" class="fa-remove"> Desativar Aluno</a></li>
                                            <li><a href="#" class="fa-aid"> Adicionar justificativa</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <label for="">
                        <button type="submit" class="btn btn-block btn-success"><span class="fa-checkmark"></span> Finalizar frequência</button>
                    </label>
                </form>

            </div>
            <?php
            break;

        case 'AtaFrequencia':
            ?>
            <?php
            break;

        default :
            include_once 'telas/inicial.php';
            break;
    }
}
               