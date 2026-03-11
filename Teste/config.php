<?php
$conn = new mysqli("localhost","root","","almafisio");

if($conn->connect_error){
    die("Erro: " . $conn->connect_error);
}
session_start();
?>