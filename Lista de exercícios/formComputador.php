<?php

    require 'Computador.php';

    if(isset($_POST['submit'])){
        $comp = new Computador;

        $comp->setMarca($_POST['marca']);
        $comp->setCor($_POST['cor']);
        $comp->setModelo($_POST['modelo']);
        $comp->setNumero($_POST['numero']);
        $comp->setPreco($_POST['preco']);
        $comp->calcularValor();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computador</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <input type="text" name="marca" placeholder="Marca">
        </p>
        <p>
            <input type="text" name="cor" placeholder="Cor">
        </p>
        <p>
            <input type="text" name="modelo" placeholder="Modelo">
        </p>
        <p>
            <input type="number" name="numero" placeholder="Número de Série">
        </p>
        <p>
            <input type="number" name="preco" placeholder="Preço">
        </p>
        <p>
            <input type="submit" name="submit" value="Enviar">
        </p>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $comp->imprimir();
        }
    ?>
</body>
</html>