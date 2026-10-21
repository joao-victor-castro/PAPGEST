<?php
// Incluído em todas as páginas
// Inicia sessão, faz conexão com a base de dados, 
// importa autenticação 

session_start();
include(__DIR__ . "/db_connect.php");

include(__DIR__ . "/auth.php");
require_login();
?>