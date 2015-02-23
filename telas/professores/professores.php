<?php
include_once 'telas/professores/validacaoProfessor.php';
?>
<div class="container">
    <div class="professores well">
        <form method="post" class="form-horizontal">
            <legend><span class="fa-user-add"></span> Cadastro de professores</legend>
            <span class="help-block">Preencha corretamente os acampos abaixo com os  dados do professor</span>
            <ul>
                <li>
                    <label for="">Nome do professor:
                        <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['nome']; ?>
                            </span>
                        <?php endif; ?>    
                        <input class="input-block-level" name="nome" type="text" value="<?php echo $projeto['nome'] ?>" placeholder="Nome"  />
                    </label>
                </li>
                <li>
                    <label for="">Data de Nascimento:
                        <?php if ($temErros && isset($errosValidacao['dtNascimento'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['dtNascimento']; ?>
                            </span>
                        <?php endif; ?>
                        <input class="input-block-level" name="dtNascimento" value="<?php echo $projeto['dtNascimento'] ?>" type="text" placeholder="Data de nascimento"  />
                    </label>
                </li>
                <li>
                    <label for="">Rg:
                        <?php if ($temErros && isset($errosValidacao['rg'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['rg']; ?>
                            </span>
                        <?php endif; ?>
                        <input class="input-block-level" name="rg" value="<?php echo $projeto['rg'] ?> "type="text" placeholder="RG"  />
                    </label>
                </li>
                <li>
                    <label for="">CPF:
                         <?php if ($temErros && isset($errosValidacao['cpf'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['cpf']; ?>
                            </span>
                        <?php endif; ?>
                        <input class="input-block-level" name="cpf" value="<?php echo $projeto['rg'] ?>" type="text" placeholder="CPF"  />
                    </label>
                </li>
                <li>
                    <label for="">Data de admissão:
                        <?php if ($temErros && isset($errosValidacao['dtAdmissao'])) : ?>
                            <span class="erro">
                                <?php echo $errosValidacao['dtAdmissao']; ?>
                            </span>
                        <?php endif; ?>
                        <input class="input-block-level" name="dtAdmissao" value="<?php echo $projeto['dtAdmissao'] ?>" type="text" placeholder="Data de admissão"  />
                    </label>
                </li>
                <li>
                    <label>Turno</label>
                    <select>
                        <option value="">Selecione um turno</option>
                        <option value="">Manhã</option>
                        <option value="">Tarde</option>
                        <option value="">Noite</option>
                    </select>
                </li>               
            </ul>
            <input class="btn btn-primary " type="submit" value="Enviar" />
        </form>
    </div>
</div>
