<?php
include("conexão.php");

$SQL = "SELECT * FROM dados ORDER BY id DESC LIMIT 1";
$result = $pdo->query($SQL);


if($result->fetch_assoc()){

;

echo json_encode([
    "velocidade" => $row["velocidade"],
    "RPM" => $row["RPM"],
]);
}else{

echo json_encode([
    "velocidade" => 0,
     "RPM" => 0,
]);
}

$conn-> close();
?>