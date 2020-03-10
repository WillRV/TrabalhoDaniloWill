<?php
    require 'Apolice.php';

    $Segurado = new Apolice('Nome', 0, 0);

    if(isset($_POST['submit'])){
        // $Segurado = new Apolice($_POST['nome'], $_POST['idade'], 0);
        $Segurado->nome = $_POST['nome'];
        $Segurado->idade = $_POST['idade'];
        $Segurado->premio = 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apólice</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="number" name="idade" placeholder="Idade">
        <input type="text" name="cidade" placeholder="Cidade">
        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $Segurado->imprimir();
        }
    ?>
</body>
</html>