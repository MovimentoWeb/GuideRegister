<?php
$bdServidor = '127.0.0.1';
$bdUsario = 'root';
$bdSenha = '';
$bdBanco = 'guideregister';
$conexao = mysqli_connect($bdServidor, $bdUsario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo"Problemas para conectar no banco.Verifique os dados!";
}

