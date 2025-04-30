<?php
$nomeCliente = ($_POST['nomeCliente']);
$produto1 = $_POST['produto1'];
$valor1 = ($_POST['valor1']);
$produto2 = $_POST['produto2'];
$valor2 = ($_POST['valor2']);
$valorPago = ($_POST['valorPago']);

$total = $valor1 + $valor2;
$troco = $valorPago - $total;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nota Fiscal</title>
    <link rel="stylesheet" href="form_1.css">
</head>
<body>
    <div class="nota-fiscal">
        <h1>Nota Fiscal</h1>
        <p><strong>Cliente:</strong> <?php echo $nomeCliente; ?></p>
        <p><strong>Produto 1:</strong> <?php echo $produto1; ?> - R$ <?php echo number_format($valor1, 2, ',', '.'); ?></p>
        <p><strong>Produto 2:</strong> <?php echo $produto2; ?> - R$ <?php echo number_format($valor2, 2, ',', '.'); ?></p>
        <p><strong>Total Gasto:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
        <p><strong>Valor Pago:</strong> R$ <?php echo number_format($valorPago, 2, ',', '.'); ?></p>
        <p><strong>Troco:</strong> R$ <?php echo number_format($troco, 2, ',', '.'); ?></p>
    </div>
</body>
</html>
