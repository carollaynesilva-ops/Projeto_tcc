<?php
session_start();
include("config/conexao.php");

if ($_POST) {
    $usuario_id = $_SESSION['id'];
    $servico_id = $_POST['servico'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    // Verificar conflito
    $verifica = $conn->query("SELECT * FROM agendamentos 
        WHERE data='$data' AND hora='$hora' 
        AND status != 'cancelado'");

    if ($verifica->num_rows > 0) {
        echo "Horário já ocupado!";
    } else {
        $conn->query("INSERT INTO agendamentos 
        (usuario_id, servico_id, data, hora)
        VALUES ('$usuario_id','$servico_id','$data','$hora')");

        // Simulação de e-mail (log)
        file_put_contents("log_email.txt", 
        "Novo agendamento em $data às $hora\n", FILE_APPEND);

        echo "Agendamento realizado com sucesso!";
    }
}
?>