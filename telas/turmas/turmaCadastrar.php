<?php
include_once 'telas/turmas/validacaoTurmas.php';
?>

<div class="meioTurma ">
    <form class="well" method="POST">
        <legend><span class="fa-user-add"></span> Cadastrar Turma</legend>
        
        Nome do curso: 
        <?php if ($temErros && isset($errosValidacao['curso'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['curso']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="curso" class="input-block-level" placeholder="Nome do Curso" value="<?php echo $projeto['curso']; ?>"><br />
        
        Professor: 
        <?php if ($temErros && isset($errosValidacao['professor'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['professor']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="professor" class="input-block-level" placeholder="Professor" value="<?php echo $projeto['professor']; ?>"><br />
        
        Codigo de Turma: 
        <?php if ($temErros && isset($errosValidacao['codigot'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['codigot']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text"  class="input-block-level" placeholder="Codigo Turma" name="codigot" value="<?php echo $projeto['codigot']; ?>"><br />
        Carga Horaria: 
         <?php if ($temErros && isset($errosValidacao['CargaH'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['CargaH']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text" class="input-block-level" placeholder="Carga Horaria" name="CargaH" value="<?php echo $projeto['CargaH']; ?>" ><br />
        Turno: 
         <?php if ($temErros && isset($errosValidacao['Turno'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['Turno']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text" class="input-block-level" placeholder="Turno" name="Turno" value="<?php echo $projeto['Turno']; ?>" ><br />
        Periodo: 
        <?php if ($temErros && isset($errosValidacao['Periodo'])) : ?>
            <span class="erro">
                <?php echo $errosValidacao['Periodo']; ?>
            </span>
        <?php endif; ?>
        
        <input type="text" class="input-block-level" placeholder="Periodo" name="Periodo" value="<?php echo $projeto['Periodo']; ?>"><br />
        

        <button type="submit" class="btn btn-primary"><span class="fa-user-add"></span> Enviar</button>
    </form>
</di