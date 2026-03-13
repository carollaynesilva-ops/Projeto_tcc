<?php
require_once "config.php";
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/style.css">
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
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #e4f1ff;
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
    </style>
</head>

<body>
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
            
        </ul>

        <div class="profile">
             <a href="perfil.php">
                <img src="_imagens/perfil.jpg" alt="foto do usuário">
                <!-- <span>Perfil</span> -->
             </a>
            
        </div>
    </nav>


    <div class="container_center">

    </div>
</body>

</html>