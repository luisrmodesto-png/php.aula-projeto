<?php
$host = 'localhost';
$dbname = 'nome_do_seu_banco';
$username = 'seu_usuario';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, );
    
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: por favor faz de novo!!!" . $e->getMessage();
}
?>
