<?php require_once "config.php"; ?>

<nav>
    <div class="logo">🏃 AlmaFisio</div>

    <div class="nav-links">

        <?php if(isset($_SESSION['usuario'])): ?>

            <a href="home.php">Serviços</a>
            <a href="meus_agendamentos.php">Minha Agenda</a>

            <?php if($isAdmin): ?>
                <a href="tela_admin.php">Admin</a>
            <?php endif; ?>

            <a href="logout.php">Sair</a>

        <?php endif; ?>

    </div>
</nav>