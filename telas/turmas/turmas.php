<?php
include_once 'telas/turmas/validacaoTurma.php';

if (!isset($_GET['opcao'])) {
    include_once 'telas/inicial.php';
} else {
    switch ($_GET['opcao']) {

        case'cadastrar':
            ?>
            <div class="meioTurma ">
                <form class="well" method="post">
                    <legend><span class="fa-user-add"></span> Cadastrar Turma</legend>

                    <label for="paTurma">PA da Turma: 
                        <?php if ($temErros && isset($errosValidacao['paTurma'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['paTurma']; ?>
                            </span>
                        <?php endif; ?>
                        <input type="text" id="paTurma" class="input-block-level" placeholder="PA da turma" name="paTurma" value="<?php echo $dadosTurmas['paTurma']; ?>"><br />
                    </label>

                    <div class="row-fluid">
                        <div class="span2">
                            <label for="chTotal">Carga Horaria: 
                                <?php if ($temErros && isset($errosValidacao['chTotal'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['chTotal']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="chTotal" class="input-block-level" placeholder="Carga Horaria" name="chTotal" value="<?php echo $dadosTurmas['chTotal']; ?>" ><br />
                            </label>
                        </div>
                        <div class="span3">
                            <label for="Turno">
                                Turno: 
                                <select  id="Turno" class="input-block-level" placeholder="Turno" name="Turno">
                                    <option> -- Selecione o turno --</option>
                                    <option>Manhã</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                </select>
                                <input type="hidden" name="turno"/>
                                <br />
                            </label>
                        </div>
                        
                        <div class="row-fluid span3">
                        <label for="nomeCurso">Curso:<br />
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
                        
                    <div class="row-fluid span3">
                        <label for="nomeDisciplina">Disciplina:<br />
                            <select name="nomeDisciplina">
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
                            <input type="hidden" name="idDisciplina"/>
                            <input type="hidden" name="nomeDisciplina"/>
                        </label>
                    </div>
                    </div>
                    <a href="index.php" class="btn btn-info"><span class="fa-home"></span> Voltar a página inicial</a>
                    <input type="hidden" name="cadTurma"/>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadastrar</button>
                </form>
            </div>
            <?php
            break;

        case'resultados':
            ?>
            <div class="meioTurma ">
                <form class="well">
                    <legend><span class="fa-note"></span> Dados Da Turma</legend>
                    Turma:
                    <label for="">
                        Professor:
                    </label>

                    <label for=""></label>
                    Codigo da Turma:
                    <label for=""></label>
                    Carga Horaria: 
                    <label for=""></label>
                    Turno: 
                    <label for=""></label>
                    Periodo: 
                    <label for=""></label>
                    <input type="button" class=" btn btn-primary span2" value="Enviar"  />
                </form>
            </div>
            <?php
            break;

        case'pesquisar':
            ?>
            <div class="PesquisarTurmas">
                <div class="well">  
                    <form class="form-search" method="post">
                        <?php if ($temErros && isset($errosValidacao['pesquisaTurma'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['pesquisaTurma']; ?>
                            </span>
                        <?php endif; ?>

                        <legend><span class="fa-search3"></span>  Pesquisar Turmas</legend>
                        <span class="help-block">Digite a PA da turma para pesquisa</span>

                        <ul>
                            <li>
                                <div class="input-append">
                                    <input id="" name="pesquisaTurma" type="text" class="search-query input-block-level" value="<?php echo $projeto['pesquisaTurma']; ?>" />
                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                            </li>
                        </ul>  
                    </form>

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

        case'':
            ?>
            <?php
            break;

        default:
            include_once 'telas/inicial.php';
            break;
    }
}