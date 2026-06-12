<?php
$host = 'localhost';
$dbname = 'nome_do_seu_banco';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso!";
} catch(PDOException $e) {
    echo "Erro na conexão: por favor coloque suas crendencias " . $e->getMessage();
}
$dadosOriginais = [
    [
        'nome_teste' => '',
        'rpm' => '',
        'ativo_sn'   => ''
    ]
];
echo json_encode([
    'dados' => $dadosOriginais,
    ]);




$SQL = "SELECT * FROM dados ORDER BY id DESC LIMIT 1";
$result = $pdo->query($SQL);
if ($result->rowCount() > 0 ) {}