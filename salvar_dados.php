<?php

try{

  
 if (isset($_POST['velocidade']) && isset($_POST['RPM'])) {
$vel = $_POST['velocidade'];
$rpm = $_POST['RPM'];
    echo "Dados salvos com sucesso no banco de dados!";

} 
$sql = "INSERT INTO dados (velocidades,rpm) VAlues ('$vel','$rpm)";
$pdo ->query($sql);
}


?>

