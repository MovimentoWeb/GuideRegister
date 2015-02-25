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

                    <label for="curso">
                        PA da turma: 
                        <input type="text" id="curso" name="curso" class="input-block-level" placeholder="Nome do Curso" value="<?php echo $projeto['curso']; ?>"><br />
                        <?php if ($temErros && isset($errosValidacao['curso'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['curso']; ?>
                            </span>
                        <?php endif; ?>
                    </label>

                    <label for="professor">
                        Professor: 
                        <?php if ($temErros && isset($errosValidacao['professor'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['professor']; ?>
                            </span>
                        <?php endif; ?>
                        <input type="text" id="professor" name="professor" class="input-block-level" placeholder="Professor" value="<?php echo $projeto['professor']; ?>"><br />
                    </label>

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
                                <?php if ($temErros && isset($errosValidacao['Turno'])) : ?>
                                    <span class="erro">
                                        <?php echo $errosValidacao['Turno']; ?>
                                    </span>
                                <?php endif; ?>
                                <input type="text" id="Turno" class="input-block-level" placeholder="Turno" name="Turno" value="<?php echo $projeto['Turno']; ?>" ><br />
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Enviar</button>
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
            <div class="PesquisarAluno">
                <div class="well">  
                    <form class="form-search">
                        <legend><span class="fa-search3"></span>  Pesquisar Turmas</legend>
                        <span class="help-block">Digite a PA da turma para pesquisa</span>

                        <ul>
                            <li>
                                <div class="input-append">
                                    <input type="text" class="search-query input-block-level">
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
            <?php if ($temErros && isset($errosValidacao['pesq'])) : ?>
                <span class="erro">
                    <?php echo $errosValidacao['pesq']; ?>
                </span>
            <?php endif; ?>
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