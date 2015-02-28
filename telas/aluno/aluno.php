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
                    <input type="hidden" name="EditAluno"/>
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
                                                    <li><a href="?pg=aluno&opcao=detalhes&detalhes=<?php echo $aluno['idAluno'] ?>" class="fa-delicious"> Ver detalhes</a></li>
                                                    <li><a href="?pg=aluno&opcao=desativar&desativar=<?php echo $aluno['idAluno'] ?>"  class="fa-remove"> Desativar Aluno</a></li>
                                                    <li><a href="?pg=aluno&opcao=editar&edit=<?php echo $aluno['idAluno'] ?>" class="fa-pencil"> Editar aluno</a></li>
                                                    <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa&just=<?php echo 'idAluno'; ?>"  class="fa-aid"> Adicionar justificativa</a></li>
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
                    <legend><span class="icon-tasks"></span> Dados do aluno</legend>

                    <label for="">
                        Nome do aluno:
                        <input type="" name="nomeAluno" disabled=""/>
                    </label>

                    Disciplina:
                    <label for=""></label>
                    Codigo da Turma:
                    <label for=""></label>
                    Curso: 
                    <label for=""></label>
                    Matr: 
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
               