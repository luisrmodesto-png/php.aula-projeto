<?php
include ('conexão.php');

if (isset($_POST['$velocidade']) !empty($_POST['rpm'])) {
    $vel = $_POST['$velocidade'];
    $rpm= $_POST['$rpm'];
}
$sql = "INSERT INTO dados (velocidade,rpm) VALUES ('$vel', '$rpm')";
$pdo->query($sql);

?>