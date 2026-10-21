<?php
//Autenticação e autorização

// Verifica se a página é pública e redireciona se não for
function require_login(){
    global $PAGINA_PUBLICA;

    if(!empty($PAGINA_PUBLICA)){
        return;
    }

    if(!isset($_SESSION["user_id"])){
        header('Location: login.php');
        return;
    }
}

?>