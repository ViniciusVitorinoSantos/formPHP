<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="author" content="Vinícius Vitorino"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
    <title>Calcula Raiz</title>
</head>

<body>
<div>
    <?php
        $valor = $_GET["v"];
        $resultado = sqrt($valor);
        echo"O Valor da raiz quadradade de $valor é $resultado";


    ?>
</div>

</body>

</html>