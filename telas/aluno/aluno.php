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
                            <label for="nomeAluno">Nome do aluno<br />
                                <?php if ($temErros && isset($errosValidacao['nomeAluno'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeAluno']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="nomeAluno" name="nomeAluno" autofocus="" class="input-block-level" value="<?php echo $dadosAluno['nomeAluno']; ?>" placeholder="Nome">
                            </label>
                        </li>
                        <li class="row-fluid">
                            <label class="span3" for="matricula">Matrícula<br />
                                <?php if ($temErros && isset($errosValidacao['matricula'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['matricula']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="matricula" name="matricula" class="input-block-level" value="<?php echo $dadosAluno['matricula']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label class="span3">Data de Nascimento<br />
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="dtNascimento" class="input-block-level" value="<?php echo $dadosAluno['dtNascimento']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label class="span3">RG<br />
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="rg" class="input-block-level" value="<?php echo $dadosAluno['rg']; ?>" placeholder="RG">
                            </label>



                            <label class="span3">CPF<br />
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="cpf" class="input-block-level" value="<?php echo $dadosAluno['cpf']; ?>" placeholder="CPF">
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
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="cadAluno"/>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadastrar</button>
                </form>
            </div>
            <?php
            break;

        case'editar':
            $dadosAluno = listarAlunoPorId($conexao, $_GET['idAluno']);
            ?>
            <div class="conteinerAluno">
                <form class="well" method="post">
                    <legend><span class="fa-user-add"></span> Atualizar aluno</legend>
                    <span class="help-block">Preencha corretamente os campos abaixo com os dados do aluno. </span>
                    <ul>
                        <li>
                            <label for="nomeAluno">Nome do aluno<br />
                                <?php if ($temErros && isset($errosValidacao['nomeAluno'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeAluno']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="nomeAluno" name="nomeAluno" autofocus="" class="input-block-level" value="<?php echo $dadosAluno['nomeAluno']; ?>" placeholder="Nome">
                            </label>
                        </li>
                        <li class="row-fluid">
                            <label class="span3" for="matricula">Matrícula<br />
                                <?php if ($temErros && isset($errosValidacao['matricula'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['matricula']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="matricula" name="matricula" class="input-block-level" value="<?php echo $dadosAluno['matricula']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label class="span3">Data de Nascimento<br />
                                <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['dtNascimento']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="dtNascimento" class="input-block-level" value="<?php echo $dadosAluno['dtNascimento']; ?>" placeholder="Data de Nascimento">
                            </label>
                            <label for="rg" class="span3">RG<br />
                                <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['rg']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" name="rg" class="input-block-level" id="rg" value="<?php echo $dadosAluno['rg']; ?>" placeholder="RG">
                            </label>
                            <label for="cpf" class="span3">CPF
                                <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['cpf']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="cpf" name="cpf" class="input-block-level" value="<?php echo $dadosAluno['cpf']; ?>" placeholder="CPF...">
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
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="EditAluno"/>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Atualizar</button>
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
                        <?php if ($temErros && isset($errosValidacao['nomeAlunoPesquisa'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nomeAlunoPesquisa']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite um nome de aluno para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input name="nomeAlunoPesquisa" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus="">
                                    <input type="hidden" name="pesquisar"/>
                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                            </li>
                        </ul>  
                    </form>


                    <!--        Resultado das pesquisas-->
                    <?php
                    if ($exibirTabela == TRUE) {
                        ?>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Detalhes</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listarAluno as $aluno):
                                    ?>
                                    <tr>
                                        <td><?php echo $aluno['nomeAluno'] ?></td>
                                        <td>Detalhes do resultado 4</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                    Ação
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="?pg=aluno&opcao=detalhes&idAluno=<?php echo $aluno['idAluno'] ?>" class="fa-delicious"> Ver detalhes</a></li>
                                                    <li><a href="?pg=aluno&opcao=desativar&idAluno=<?php echo $aluno['idAluno'] ?>"  class="fa-remove"> Desativar Aluno</a></li>
                                                    <li><a href="?pg=aluno&opcao=editar&idAluno=<?php echo $aluno['idAluno'] ?>" class="fa-pencil"> Editar aluno</a></li>
                                                    <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa&idAluno=<?php echo 'idAluno'; ?>"  class="fa-aid"> Adicionar justificativa</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>    
                                    <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <?php
                    }else {
                        echo '0 - Resultados encontrados';
                    }
                    ?>
                </div>
            </div>
            <?php
            break;

        case 'detalhes':
            ?>
            <div class="containerAluno ">
                <form class="well">
                    <legend><span class="fa-user4"></span> Dados do aluno</legend>
                    <div class="row-fluid">
                        <div class="span3">Nome do aluno:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosAluno['nomeAluno']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">Matricula: </div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosAluno['matricula']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">Data de Nascimento:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosAluno['dtNascimento']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">RG:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosAluno['rg']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">CPF:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosAluno['cpf']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="" class="btn btn-success"><span class="fa-backward" ></span> Voltar</a>
                    <a href="" class="btn btn-warning"><span class="fa-pencil"></span> Editar aluno</a>
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

        case 'desativar':
            ?>
            desativar aluno
            <?php
            break;

        default :
            include_once 'telas/inicial.php';
            break;
    }
}
               