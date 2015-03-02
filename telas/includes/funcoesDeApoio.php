<?php

//Esta função verifica se o botão submit do formulário foi clicado
function temPost() {
    if (count($_POST) > 0) {
        return true;
    }
    return false;
}
function esta_logado($redir = TRUE) {
 
    
    
    $CI->load->library('session');
    $user_status = $CI->session->userdata('user_logado');
    
    
    if (!isset($user_status) || $user_status != TRUE) {
        $CI->session->sess_destroy();
        if ($redir) {
            $CI->session->set_userdata(array('redir_para' => current_url()));
            set_msg('msgerro', 'Acesso restrito, faça login antes de prosseguir', 'erro');
            redirect('acesso/login');
        } else {
            return FALSE;
        }
    } else {
        return TRUE;
    }
}