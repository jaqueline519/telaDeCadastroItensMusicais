<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="alert">
        Cadastro Efetuado
    </div>

    <section>
        <div class="resultado">
            <?php
            $tipo = $_POST["tipo"];
            $nomeInterprete = $_POST["nomeInterprete"];
            $nomeAlbum = $_POST["nomeAlbum"];
            $dataDeCompra = $_POST["dataDeCompra"];
            $valorPago = $_POST["valorPago"];
            $observacao = $_POST["observacao"];

            echo "<h1>Novo $tipo cadastrado:</h1>";
            echo "<p><strong>Tipo de Item:</strong> $tipo</p>";
            echo "<p><strong>Nome do Intérprete:</strong> $nomeInterprete</p>";
            echo "<p><strong>Nome do Álbum:</strong> $nomeAlbum</p>";
            echo "<p><strong>Data da Compra:</strong> $dataDeCompra</p>";
            echo "<p><strong>Valor Pago:</strong> $valorPago</p>";
            echo "<p><strong>Observação:</strong> $observacao</p>";
            ?>
        <a href="javascript:history.go(-1)" class="voltar">cadastrar um novo item</a>
        </div>
    </section>
</body>

</html>