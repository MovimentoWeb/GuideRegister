<?php
include_once 'telas/turmas/validacaoTurmas.php';
?>
<div class="PesquisarAluno">
    <div class="well">  
        <form class="form-search">
            <legend><span class="fa-search3"></span>  Pesquisar Alunos</legend>
            <span class="help-block">Digite um nome de aluno para pesquisa</span>

            <ul>
                <li>
                    <div class="input-append">
                        <input type="text" class="search-query input-block-level">
                        <!--                        <button type="submit" class="btn btn-primary">Busca</button>-->
                        <?php if ($temErros && isset($errosValidacao['pesq'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['pesq']; ?>
                            </span>
                        <?php endif; ?>
                        <a class="btn btn-primary" name="pesq" value="<?php echo $projeto['pesq']; ?>"> Buscar</a>
                    </div>
                </li>
            </ul>  
        </form>
    </div>
</div>