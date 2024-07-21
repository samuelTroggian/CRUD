<?php
//CONFIGURAÇOES GERAIS
$servidor = "localhost";
$usuario = "root";
$senha = "@Qualidade22";
$banco = "sucos";

$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

//FUNÇÃO PARA LIMPAR ENTRADAS
function limparPost($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);

    return $dado;
}
?>