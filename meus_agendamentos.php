<?php
require_once "config.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
include "header.php";
$u_id = $_SESSION['usuario']['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus agendamentos</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background: #f1f5f9;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
        }

        .status {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .pendente {
            background: #fef9c3;
            color: #854d0e;
        }

        .confirmado {
            background: #dcfce7;
            color: #166534;
        }
    </style>
</head>

<body>
    
    <div class="container">
        <div class="card">

            <h2>Minha Agenda</h2>

            <table>

                <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Data</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php

                    $u_id = $_SESSION['usuario']['id'];

                    $sql = "SELECT a.*, s.nome 
FROM agendamentos a
JOIN servicos s ON s.id = a.servico_id
WHERE a.usuario_id='$u_id'";

                    $res = $conn->query($sql);

                    while ($ag = $res->fetch_assoc()) {

                    ?>

                        <tr>

                            <td><?= $ag['nome'] ?></td>

                            <td><?= date('d/m/Y', strtotime($ag['data'])) ?> às <?= $ag['horario'] ?></td>

                            <td class="status <?= $ag['status'] ?>">
                                <?= strtoupper($ag['status']) ?>
                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>