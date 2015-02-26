<?php
include_once 'telas/turmas/validacaoTurmas.php';

if (!isset($_GET['opcao'])) {
    include_once 'telas/inicial.php';
} else {
    switch ($_GET['opcao']) {

        case'cadastrar':
            ?>
            <div class="meioTurma ">
                <form class="well" method="POST">
                    <legend><span class="fa-user-add"></span> Cadastrar Turma</legend>
                    
                    <label for="nome">
                        PA da Turma: 
                        <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nome']; ?>
                            </span>
                        <?php endif; ?>
                        <input type="text" id="nome" class="input-block-level" placeholder="PA da turma" name="nome" value="<?php echo $projeto['nome']; ?>"><br />
                    </label>
                    
                   

<!--                    <label for="professor">
                        Professor: 
                        <?php// if ($temErros && isset($errosValidacao['professor'])) : ?>
                            <span class="erro">
                                <?php// echo $errosValidacao['professor']; ?>
                            </span>
                        <?php// endif; ?>
                        <input type="text" id="professor" name="professor" class="input-block-level" placeholder="Professor" value="<?php echo $projeto['professor']; ?>"><br />
                    </label>-->

                    <div class="row-fluid">
                        <div class="span4">
                            <label for="cargaHoraria">
                                Carga Horaria: 
                                <?php if ($temErros && isset($errosValidacao['CargaH'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['CargaH']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="cargaHoraria" class="input-block-level" placeholder="Carga Horaria" name="CargaH" value="<?php echo $projeto['CargaH']; ?>" ><br />
                            </label>
                        </div>
                        <div class="span4">
                            <label for="Turno">
                                Turno: 


                                <select  id="Turno" class="input-block-level" placeholder="Turno" name="Turno">
                                    <option> -- Selecione o turno --</option>
                                    <option>Manhã</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                </select>

                                <br />
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Cadrastrar</button>
                </form>
            </di
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