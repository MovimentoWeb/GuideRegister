
<?php
include_once 'telas/aluno/validacaoAluno.php';
if (!isset($_GET['opcao'])) {
    
} else {
    switch ($_GET['opcao']) {
        case'pesquisarPorAluno':
            ?>

            <div class="well">

                <div class="relatorios"> 
                    <legend><span class="fa-search3"></span>  Pesquisar Alunos</legend>

                    <form class="form-search"> 

                        <span class="help-block">Digite um nome de aluno para pesquisa</span>

                        <ul>
                            <li>
                                <div class="input-append">
                                    <input type="text" class="search-query input-block-level">
                                    <!--                        <button type="submit" class="btn btn-primary">Busca</button>-->
                                    <a href="?pg=dadosAluno" class="btn btn-primary"> Buscar</a>
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
            <div>
                <div class="well">

                    <div class="ataturmas">

                        <legend><span class="fa-user-add"></span> Ata por Turmas </legend>
                        <form class="form-search">
                            <span class="help-block">Digite o numero da turma para pesquisa</span>
                            <ul>
                                <li>
                                    <div class="input-append">
                                        <input type="text" class="search-query input-block-level">
                                        <!--                        <button type="submit" class="btn btn-primary">Busca</button>-->
                                        <a href="?pg=dadosAluno" class="btn btn-primary"> Buscar</a>
                                    </div>
                                </li>
                            </ul> 
                        </form>  
                        <div>

                            <table class="table table-striped">
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

                                </tbody>

                            </table>

                        </div>



                    </div>

                </div>    

            </div>
            <?php
            break;

        case'pesquisarDisciplinas':
            ?>


            <div class="container pesquisardisciplina">

                <div class="well">
                    <form class="form-search" method="POST">
                        <legend><span class="fa-search3"></span> Pesquisar disciplinas</legend>
                        <span class="help-block">Digite o nome da disciplina para pesquisa</span>
                        <ul>
                            <li>
                                <div class="input-append">
                                    <input type="text" class="search-query input-block-level">
                                    <button nm type="submit" class="btn btn-primary">Pesuisar</button>
                                </div>
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
