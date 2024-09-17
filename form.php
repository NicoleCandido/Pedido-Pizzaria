<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <?php include('pedido.php'); ?>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form name="form" method="post" action=" ">
        <h1>Pizzaria do Dante</h1>
        <label for="tamanho">Escolha o tamanho da pizza:</label>
        <select id="tamanho" name="tamanho">
            <option value="pequena">Pequena</option>
            <option value="media">Média</option>
            <option value="grande">Grande</option>
        </select><br>

        <label for="sabor">Sabor da pizza:</label>
        <select id="sabor" name="sabor">
            <option value="mussarela">Mussarela</option>
            <option value="calabresa">Calabresa</option>
            <option value="portuguesa">Portuguesa</option>
            <option value="pepperoni">Pepperoni</option>
            <option value="chocolate">Chocolate</option>
            <option value="banana">Banana com canela</option>
        </select><br>
        Quantidade que deseja: <input type="text" name="quantidade" placeholder="" /></br>
        <input type="submit" name="comprar" value="Finalizar" />
    </form>
    <?php
    $Pedido = new Pedido();
    
    echo $Pedido->finalizar();
    ?>
    <div class = "ResumodoPedido">
    <h2>Resumo do Pedido</h2>
        <p>Você pediu uma pizza de tamanho <strong><?php echo htmlspecialchars($tamanho); ?></strong>.</p>
        <p>Quantidade: <strong><?php echo htmlspecialchars($quantidade); ?></strong>.</p>
        <p>O preço final é: <strong><?php echo number_format($precoFinal, 2, ',', '.'); ?></strong></p>
    </div>
</body>
</html>

	