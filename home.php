<?php
require_once "config.php";
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        body {
            margin: 0;
            background: radial-gradient(circle at top left,
                    rgba(255, 255, 255, 0.7) 0%,
                    transparent 40%),
                linear-gradient(135deg,
                    #b9d9ff 0%,
                    #cce3ff 50%,
                    #a1cdff 100%);
            background-attachment: fixed;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f4f9ff;
            padding: 10px 40px;
        }

        /* logo */
        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .alma {
            color: #72cbff;
        }

        .fisio {
            color: #42678d;
        }

        /* menu */
        .menu {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .menu li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        .menu li a:hover {
            color: #1d4ed8;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 35px;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            font-size: 17px;
            color: #4c5d80;
            transition: 0.3s;
        }

        .nav-links li.active a,
        .nav-links a:hover {
            color: #2b59ff;
            /* azul igual ao botão */
        }

        .nav-links li.active::after {
            content: "";
            width: 55%;
            height: 3px;
            background: #2b59ff;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -6px;
            border-radius: 10px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
        }

        .profile span {
            font-size: 16px;
            color: #2b3f63;
        }

        .container_center {
            text-align: center;
            margin-top: 80px;
        }

        .titulo {
            font-size: 36px;
            color: #4c5d80;
        }

        .subtitulo {
            margin-top: 10px;
            font-size: 18px;
            color: #6b7a99;
        }

        /* botões */

        .acoes {
            margin-top: 35px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn-primary {
            background: #5fa8ff;
            padding: 14px 28px;
            border-radius: 12px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-secundario {
            background: #e9eff7;
            padding: 14px 28px;
            border-radius: 12px;
            color: #4c5d80;
            text-decoration: none;
            font-weight: bold;
        }

        /* cards */

        .cards {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .card {
            background: #f4f9ff;
            padding: 25px 50px;
            border-radius: 14px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .numero {
            font-size: 30px;
            font-weight: bold;
            color: #4c5d80;
        }

        .label {
            font-size: 15px;
            color: #7a8ca8;
        }
    </style>
</head>

<body>
    <!-- MENU -->
    <nav class="navbar">
        <!-- <div class="logo"><img src="_imagens/logo.png" alt="Logo" class="logo_img"></div> -->
        <h2 class="logo">
            <span class="alma">Alma</span><span class="fisio">Fisio</span>
        </h2>

        <ul class="nav-links">
            <li class="active"><a href="#">Início</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Agendamentos</a></li>
            <li><a href="#">Exercícios</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>

        <div class="profile">
            <a href="perfil.php">
                <img src="_imagens/perfil.jpg" alt="foto do usuário">
                <!-- <span>Perfil</span> -->
            </a>
        </div>
    </nav>

    <div class="container_center">

        <h1 class="titulo">
            Bem-vindo à <span class="alma">Alma</span><span class="fisio">Fisio</span>
        </h1>

        <p class="subtitulo">
            Sistema de gestão para fisioterapia esportiva
        </p>

        <div class="acoes">
            <a href="agendar.php" class="btn-primary">Agendar Consulta</a>

        </div>


        </div>

    </div>

</body>

</html>