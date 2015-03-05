<?php
include_once 'telas/disciplinas/validacaoDisciplinas.php';
if (!isset($_GET['opcao'])) {
    include_once 'telas/inicial.php';
} else {
    switch ($_GET['opcao']) {

        case'cadastrar':
            ?>
            <div class="meioTurma ">
                <form class="well" method="POST">
                    <legend><span class="fa-user-add"></span> Cadastrar Disciplina</legend>
                    <div class="row-fluid">
                        <div class="span8">  
                            <label for="nomeDisciplina">
                                Nome disciplina: 
                                <?php if ($temErros && isset($errosValidacao['nomeDisciplina'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeDisciplina']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="nomeDisciplina" class="input-block-level" placeholder="Nome disciplina" name="nomeDisciplina" value="<?php echo $dadosDiscip['nomeDisciplina']; ?>"><br />
                            </label>
                        </div>
                        <div class="span2">
                            <label for="codDisciplina">
                                Codigo da disciplina: 
                                <?php if ($temErros && isset($errosValidacao['codDisciplina'])) : ?>
                                    <span class="erro"><?php echo $errosValidacao['codDisciplina']; ?></span>
                                <?php endif; ?>
                                <input type="text" id="codDisciplina" class="input-block-level" placeholder="Codigo da disciplina" name="codDisciplina" value="<?php echo $dadosDiscip['codDisciplina']; ?>" ><br />
                            </label>
                        </div>
                        <div class="span2"> 
                            <label for="cargaHoraria">
                                Carga Horaria: 
                                <?php if ($temErros && isset($errosValidacao['ch'])) : ?>
                                    <span class="erro"><?php echo $errosValidacao['ch']; ?></span>
                                <?php endif; ?>
                                <input type="text" id="cargaHoraria" class="input-block-level" placeholder="Carga Horaria" name="ch" value="<?php echo $dadosDiscip['ch']; ?>" ><br />
                            </label>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <label for="nome">Nome professor: <br />
                            <select name="nomePofessor">
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                                <option>Professor5</option>
                                <option>Gerência</option>
                                <option>Cooredenação</option>
                                <option>Secretaria</option>
                                <option>Professor</option>
                            </select>
                            <input type="hidden" name="idProfessor"/>
                            <input type="hidden" name="nomeProfessor"/>
                        </label>

                    </div>
                    <div class="row-fluid">
                        <label for="nome">Curso:<br />
                            <select name="nomePofessor">
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                                <option>Professor5</option>
                                <option>Gerência</option>
                                <option>Cooredenação</option>
                                <option>Secretaria</option>
                                <option>Professor</option>
                            </select>
                            <input type="hidden" name="idCurso"/>
                            <input type="hidden" name="nomeCurso"/>
                        </label>

                    </div>
                    <div class="row-fluid">
                        <label for="nome">Turma:<br />
                            <select name="nomePofessor">
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                                <option>Professor5</option>
                                <option>Gerência</option>
                                <option>Cooredenação</option>
                                <option>Secretaria</option>
                                <option>Professor</option>
                            </select>
                                <input type="hidden" name="idTurma"/>
                            <input type="hidden" name="PAturma"/>
                        </label>

                    </div>
                    <div class="row-fluid">

                    </div>
                    <input type="hidden" name="cadDisciplina" />
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadastrar</button>
                </form>
            </div>
            <?php
            break;

        case'editar':
            $dadosDiscip = listarDisciplinaPorId($conexao, $_GET['idDisciplina']);
            ?>
            <div class="meioTurma ">
                <form class="well" method="POST">
                    <legend><span class="fa-user-add"></span> Cadastrar Disciplina</legend>
                    <div class="row-fluid">
                        <div class="span8">  
                            <label for="nomeDisciplina">
                                Nome disciplina: 
                                <?php if ($temErros && isset($errosValidacao['nomeDisciplina'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['nomeDisciplina']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="nomeDisciplina" class="input-block-level" placeholder="Nome disciplina" name="nomeDisciplina" value="<?php echo $dadosDiscip['nomeDisciplina']; ?>"><br />
                            </label>
                        </div>
                        <div class="span2">
                            <label for="codigoDisciplina">
                                Codigo da disciplina: 
                                <?php if ($temErros && isset($errosValidacao['codDisciplina'])) : ?>
                                    <span class="erro"><?php echo $errosValidacao['codDisciplina']; ?></span>
                                <?php endif; ?>
                                <input type="text" id="codDisciplina" class="input-block-level" placeholder="Codigo da disciplina" name="codDisciplina" value="<?php echo $dadosDiscip['codDisciplina']; ?>" ><br />
                            </label>
                        </div>
                        <div class="span2"> 
                            <label for="cargaHoraria">
                                Carga Horaria: 
                                <?php if ($temErros && isset($errosValidacao['ch'])) : ?>
                                    <span class="erro"><?php echo $errosValidacao['ch']; ?></span>
                                <?php endif; ?>
                                <input type="text" id="cargaHoraria" class="input-block-level" placeholder="Carga Horaria" name="ch" value="<?php echo $dadosDiscip['ch']; ?>" ><br />
                            </label>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <label for="nome">Nome professor: <br />
                            <select name="nomePofessor">
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                                <option>Professor5</option>
                                <option>Gerência</option>
                                <option>Cooredenação</option>
                                <option>Secretaria</option>
                                <option>Professor</option>
                            </select>
                            <input type="hidden" name="idProfessor"/>
                            <input type="hidden" name="nomeProfessor"/>
                        </label>

                    </div>
                    <div class="row-fluid">
                        <label for="nome">Curso:<br />
                            <select name="nomeCurso">
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                                <option>Professor5</option>
                                <option>Gerência</option>
                                <option>Cooredenação</option>
                                <option>Secretaria</option>
                                <option>Professor</option>
                            </select>
                            <input type="hidden" name="idCurso"/>
                            <input type="hidden" name="nomeCurso"/>
                        </label>

                    </div>
                    <div class="row-fluid">
                        <label for="nome">Turma:<br />
                            <select name="nomePofessor">
                                <option>Selecione</option>
                                <option>Professor2</option>
                                <option>Professor3</option>
                                <option>Professor4</option>
                                <option>Professor5</option>
                                <option>Gerência</option>
                                <option>Cooredenação</option>
                                <option>Secretaria</option>
                                <option>Professor</option>
                            </select>
                                <input type="hidden" name="idTurma"/>
                            <input type="hidden" name="paTurma"/>
                        </label>

                    </div>
                    <div class="row-fluid">

                    </div>
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="EditDisciplina"/>
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
                        <legend><span class="fa-search3"></span>  Pesquisar Disciplinas</legend>
                        <?php if ($temErros && isset($errosValidacao['nomeDisciplinaPesquisa'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nomeDisciplinaPesquisa']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite o nome da disciplina para pesquisar</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input name="nomeDisciplinaPesquisa" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus="">
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
                                foreach ($listarDisciplina as $disciplina):
                                    ?>
                                    <tr>
                                        <td><?php echo $disciplina['nomeDisciplina'] ?></td>
                                        <td>Detalhes do resultado 4</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                                                    Ação
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="?pg=disciplinas&opcao=detalhes&idDisciplina=<?php echo $disciplina['idDisciplina'] ?>" class="fa-delicious"> Ver detalhes</a></li>
                                                    <li><a href="?pg=disciplinas&opcao=editar&idDisciplina=<?php echo $disciplina['idDisciplina'] ?>" class="fa-pencil"> Editar Disciplina</a></li>
                                                    <li><a href="?pg=avisosEjustificativas&opcao=novaJustificativa&idAluno=<?php echo 'idDisciplina'; ?>"  class="fa-aid"> Adicionar justificativa</a></li>
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
                <form class="well" method="POST">
                    <legend><span class="fa-user4"></span> Dados da disciplina</legend>
                    <div class="row-fluid">
                        <div class="span3">código da disciplina:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosDiscip['codDisciplina']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">nome da disciplina: </div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosDiscip['nomeDisciplina']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span3">carga horária:</div>
                        <div class="span8">
                            <div class="control-group info">
                                <div class="controls">
                                    <span class="help-inline"><strong><?php echo($dadosDiscip['ch']); ?></strong></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="?pg=disciplinas&opcao=pesquisar" class="btn btn-success"><span class="fa-backward" ></span> Voltar</a>
                    <a href="?pg=disciplinas&opcao=editar&idDisciplina=<?php echo $dadosDiscip['idDisciplina']; ?>" class="btn btn-warning"><span class="fa-pencil"></span> Editar disciplina</a>
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
               