<?php

$host = 'localhost';
$dbname = 'meu_banco';
$username = 'root';
$password = 'sua_senha';

try{

  
 
    echo "Dados salvos com sucesso no banco de dados!";

} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

