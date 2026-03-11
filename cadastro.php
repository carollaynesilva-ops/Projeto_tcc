<?php
require_once "config.php";

if (isset($_POST['cadastrar'])) {

    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];
    $tipo = "cliente";

    $sql = "INSERT INTO usuarios (nome,email,senha,tipo)
VALUES ('$nome','$email','$senha','$tipo')";

    if ($conn->query($sql)) {
        $msg = "Cadastro realizado com sucesso.";
    } else {
        $erro = "Erro ao cadastrar.";
    }
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">

    <div class="card" style="max-width:500px;margin:auto;">

        <h2>Criar Conta</h2>

        <?php if (isset($msg)) echo "<p style='color:green'>$msg</p>"; ?>
        <?php if (isset($erro)) echo "<p style='color:red'>$erro</p>"; ?>

        <form method="POST">

            <label>Nome</label>
            <input type="text" name="nome" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Senha</label>
            <input type="password" name="senha" required>

            <button name="cadastrar">Cadastrar</button>

        </form>

        <p style="margin-top:15px">
            Já tem conta? <a href="index.php">Fazer login</a>
        </p>

    </div>

</div>