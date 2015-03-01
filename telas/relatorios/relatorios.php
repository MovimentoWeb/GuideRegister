
<?php
include_once 'telas/relatorios/ValidacaoRelatorio.php';
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {
        case'pesquisarPorAluno':
            ?>

            <div class="well">
                <div class="relatorios"> 
                    <form class="form-search" method="POST">
                        <legend><span class="fa-search3"></span>  Pesquisar Alunos</legend>
                        <?php if ($temErros && isset($errosValidacao['dadosRelatorio'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['dadosRelatorio']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite um nome de aluno para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input name="dadosRelatorio" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus="">

                                    <input type="hidden" name="relatorios"/>
                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                            </li>
                        </ul>  
                    </form>  

                </div>

                <div class="tabelas">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>00000</td>
                                <td>Alisson</td>
                                <td>Elias</td>
                            </tr>

                            <tr>
                                <td>00001</td>
                                <td>Felipe</td>
                                <td>Reis</td>
                            </tr>

                            <tr>
                                <td>00002</td>
                                <td>Julia</td>
                                <td>França</td>
                            </tr>
                        </tbody>

                    </table>

                </div>

            </div> 

            <?php
            break;

        case'atasPorTurmas':
            ?>
            <div class="well">
                <div class="ataturmas">

                    <legend><span class="fa-user-add"></span> Ata por Turmas </legend>
                    <form class="form-search" method="POST">

                        <?php if ($temErros && isset($errosValidacao['ataturma'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['ataturma']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite a PA da turma para pesquisar</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input id="ataturma" name="ataturma" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus=""  value="<?php echo $dadosRelatorio['ataturma']; ?>">


                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                            </li>
                        </ul>  
                    </form>  
                    <?php
                    //if ($exibirTabela == TRUE) {
                    ?>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>PA</th>
                                <th>Matricula</th>
                                <th>Nome do aluno</th>
                                <th>21</th>
                                <th>22</th>
                                <th>23</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //foreach ($listarTurmas as $aluno):
                            ?>
                            <tr>
                                <td>0</td>
                                <td>00000</td>
                                <td>Nome</td>
                                <td>
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 
                                    </label>
                                </td>
                                <td>
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> 
                                    </label>
                                </td>
                            </tr>
                            <?php
                            //endforeach;
                            ?>
                        </tbody>
                    </table>
                    <?php
                    //  }else {

                    echo '0 - Resultados encontrados';
                    //}
                    ?>
                </div>
            </div>    
            <?php
            break;

        case'pesquisarDisciplinas':
            ?>


            <div class="container pesquisardisciplina">

                <div class="well">
                    <form class="form-search" method="POST">

                        <?php if ($temErros && isset($errosValidacao['atadisciplina'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['atadisciplina']; ?>
                            </span>
                        <?php endif; ?>
                        <span class="help-block">Digite um nome da disciplina</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input id="ataturma" name="atadisciplina" placeholder="Digite um nome para pesquisa..." type="text" class="search-query input-block-level" autofocus=""  value="<?php echo $dadosRelatorio['atadisciplina']; ?>">


                                    <button type="submit" class="btn btn-primary"><span class="fa-search3"></span> Busca</button>
                                </div>
                                <div class="btn btn-success pull-right" id="butaozinho" type="submit" >Criar Disciplina</div>
                            </li>
                        </ul>  
                    </form>  

                    <div class=" tabelas2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>PA</th>
                                    <th>Disciplina</th>
                                    <th>Carga Horária</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>00000</td>
                                    <td>Programação</td>
                                    <td>1200 Horas</td>
                                </tr>
                                <tr>
                                    <td>00001</td>
                                    <td>Etica</td>
                                    <td>600 Horas</td>
                                </tr>
                                <tr>
                                    <td>00002</td>
                                    <td>BDA</td>
                                    <td>200 Horas</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                </div>

            </div>

            <?php
            break;
        default :
            break;
    }
}
?>
<!-- ---------------------- Fim ---------------------------------------------- -->  
