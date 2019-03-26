<?php
 
//Conecta com o MySQL usando PDO
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST . ';port=3306;dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

    return $PDO;
}
 
//Cria o hash da senha, usando MD5 e SHA-1
function make_hash($str)
{
    return sha1(md5($passwordHash));
}
 
//Verifica se o usuário está logado
function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
    
    return true;
}

?>