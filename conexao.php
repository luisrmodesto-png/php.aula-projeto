<?php

$host = "localhost";
$user = "root";

$conn = new mysqli($host,$user);

if($conn ->connect_erro){
    die("Erro de conexão");
}
?>