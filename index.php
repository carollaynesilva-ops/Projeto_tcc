<?php
require_once "config.php";

if (isset($_POST['login'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {

        $user = $res->fetch_assoc();

        if ($senha === $user['senha']) {

            $_SESSION['usuario'] = [
                'id' => $user['id'],
                'nome' => $user['nome'],
                'tipo' => $user['tipo']
            ];

            header("Location: home.php");
            exit;
        }
    }

    $erro = "Email ou senha inválidos";
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">

    <div class="card">

        <h2>Login AlmaFisio</h2>

        <?php if (isset($erro)) echo "<p style='color:red'>$erro</p>"; ?>

        <form method="POST">

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Senha</label>
            <input type="password" name="senha" required>

            <button name="login">Entrar</button>

            <p style="margin-top:15px">
                Não tem conta? <a href="cadastro.php">Criar conta</a>
            </p>
        </form>

    </div>

</div>