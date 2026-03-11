<?php
require_once "config.php";

if(!isset($_SESSION['usuario'])){
header("Location: index.php");
exit;
}

include "header.php";

$u_id = $_SESSION['usuario']['id'];
?>

<div class="container">

<div class="card">

<h2>Minha Agenda</h2>

<table>

<tr>
<th>Serviço</th>
<th>Data</th>
<th>Status</th>
</tr>

<?php

$sql = "SELECT a.*, s.nome 
FROM agendamentos a
JOIN servicos s ON s.id = a.servico_id
WHERE a.usuario_id='$u_id'";

$res = $conn->query($sql);

while($ag = $res->fetch_assoc()){

?>

<tr>

<td><?= $ag['nome'] ?></td>

<td><?= $ag['data'] ?> <?= $ag['horario'] ?></td>

<td><?= $ag['status'] ?></td>

</tr>

<?php } ?>

</table>

</div>

</div>