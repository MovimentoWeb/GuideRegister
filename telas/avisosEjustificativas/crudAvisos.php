<?php
function inserirAvisos($conexao, $dados) {
    $sqlInserir = "insert into aviso ("
            . "Selecione, "
            . "Professor2, "
            . "Professor3, "
            . "Professor4, "
            . "Gerência, "
            . "Cooredenação, "
            . "Secretaria, "
            . "Professor"
            . ")"
            . "VALUES('"
            . "{$dados['Selecione']}','"
            . "{$dados['Professor2']}','"
            . "{$dados['Professor3']}','"
            . "{$dados['Professor4']}','"
            . "{$dados['Gerência']}','"
            . "{$dados['Cooredenação']}','"
            . "{$dados['Secretaria']}','"
            . "{$dados ['Professor']}')";
    if (mysqli_query($conexao, $sqlInserir)) {
        echo 'fez a inserao';
    } else {
        print_r(mysqli_error($conexao));
    }

    unset($_POST);
}