<?php
require_once "config.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

include "header.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        :root {
            --primary: #0ea5e9;
            --secondary: #f0f9ff;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --white: #ffffff;
            --success: #10b981;
            --danger: #ef4444;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--secondary);
            margin: 0;
        }

        nav {
            background: var(--white);
            padding: 1.2rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-light);
            margin-left: 20px;
            font-size: 0.9rem;
        }

        .container {
            max-width: 1100px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        .card {
            background: var(--white);
            padding: 2rem;
            border-radius: 16px;
            border: 1px solid rgba(14, 165, 233, 0.1);
        }

        .grid-servicos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .servico-item {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        input,
        select {
            width: 100%;
            padding: 0.8rem;
            margin: 0.5rem 0 1.2rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }

        button {
            cursor: pointer;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 8px;
            background: var(--primary);
            color: white;
            font-weight: 600;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }

        th {
            background: #f1f5f9;
            padding: 1rem;
            text-align: left;
        }

        td {
            padding: 1.2rem 1rem;
            border-bottom: 1px solid #f1f5f9;
        }

        .status {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: bold;
        }

        .confirmado {
            background: #dcfce7;
            color: #166534;
        }

        .pendente {
            background: #fef9c3;
            color: #854d0e;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Nossos Tratamentos</h1>

        <div class="grid-servicos">

            <?php

            $sql = "SELECT * FROM servicos";
            $res = $conn->query($sql);

            while ($s = $res->fetch_assoc()) {

            ?>

                <div class="servico-item">

                    <h3><?= $s['nome'] ?></h3>

                    <p>R$ <?= number_format($s['preco'], 2, ",", ".") ?></p>

                    <a href="agendar.php?id=<?= $s['id'] ?>">
                        <button>Agendar</button>
                    </a>

                </div>

            <?php } ?>

        </div>

    </div>

</body>

</html>