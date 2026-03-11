<?php
require_once "config.php";

if(!isset($_SESSION['usuario'])){
header("Location: index.php");
exit;
}

include "header.php";
?>

<div class="container">

<h1>Nossos Tratamentos</h1>

<div class="grid-servicos">

<?php

$sql = "SELECT * FROM servicos";
$res = $conn->query($sql);

while($s = $res->fetch_assoc()){

?>

<div class="servico-item">

<h3><?= $s['nome'] ?></h3>

<p>R$ <?= number_format($s['preco'],2,",",".") ?></p>

<a href="agendar.php?id=<?= $s['id'] ?>">
<button>Agendar</button>
</a>

</div>

<?php } ?>

</div>

</div>