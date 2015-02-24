<?php
include_once 'telas/justificativa/ValidacaoJustificativa.php';
?>
<div class="container justificativa">

  <form class="well" method="POST">
        <legend><span class="fa-search3"></span>Justificativas</legend>  

        Nome do Aluno: 
         <?php if ($temErros && isset($errosValidacao['nome'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['nome']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text" class="input-block-level" placeholder="Nome do aluno" name="nome" value="<?php echo $projeto['nome']; ?>"><br />
        Turma: 
          <?php if ($temErros && isset($errosValidacao['Turma'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['Turma']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text" class="input-block-level" placeholder="Turma" name="Turma" value="<?php echo $projeto['Turma']; ?>" ><br />
        Curso: 
          <?php if ($temErros && isset($errosValidacao['Curso'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['Curso']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text" class="input-block-level" placeholder="Curso" name="Curso" value="<?php echo $projeto['Curso']; ?>"><br />
        Nome do Professor: 
         <?php if ($temErros && isset($errosValidacao['NomeP'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['NomeP']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text" class="input-block-level" placeholder="Nome do Professor" name="NomeP" value="<?php echo $projeto['NomeP']; ?>" ><br />
        Justificativas:
        <?php if ($temErros && isset($errosValidacao['Just'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['Just']; ?>
            </span>
        <?php endif; ?>
        
        <textarea class="input-block-level" rows="3" placeholder="Detalhes das Justificativas" name="Just" value="<?php echo $projeto['Just']; ?>" > </textarea> 
        <p>
            <button class="btn btn-success" type="submit"><span class="fa-checkmark"></span> Aceitar justificativa</button>
            <button class="btn btn-danger" type="button"><span class="fa-cross3"></span> Rejeitar</button>
        </p>

    </form>


</div>