<!--<Cadastro do aluno> Inicio da pagina cadastro do aluno-->
<?php
include_once 'telas/aluno/validacaoAluno.php';
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

            <li>
                <label>Data de Nascimento<br />
                    <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['dtNascimento']; ?>
                        </span>
                    <?php endif; ?>
                    <input type="text" name="dtNascimento" class="input-block-level" value="<?php echo $projeto['dtNascimento']; ?>" placeholder="Data de Nascimento">
                </label>
            </li>

            <li>
                <label>RG<br />
                    <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                        <span class="erro">
                            <?php echo $errosValidacao['rg']; ?>
                        </span>
                    <?php endif; ?>
                    <input type="text" name="rg" class="input-block-level" value="<?php echo $projeto['rg']; ?>" placeholder="RG">
                </label>
            </li>

            <li>
                <label>CPF<br />
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