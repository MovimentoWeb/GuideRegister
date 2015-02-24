<?php

//Esta função verifica se o botão submit do formulário foi clicado
function temPost() {
    if (count($_POST) > 0) {
        return true;
    }
    return false;
}