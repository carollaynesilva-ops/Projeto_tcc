<?php

session_start();

$conn = new mysqli("localhost", "root", "mysql", "almafisio", 3306);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}

$isAdmin = ($_SESSION['usuario']['tipo'] ?? null) === 'admin';
