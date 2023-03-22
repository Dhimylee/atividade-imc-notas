<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>RESULTADO DA SUA MÉDIA</H1>
    <?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nome = $_POST['nome'];
    $media = ($nota1 + $nota2) / 2;

    if ($media < 4.0) {
        echo "Olá $nome!. Sua média final baseada na sua primeira nota de: " . $nota1 . " e na segunda nota de " . $nota2 . " ficou em: " . round($media, 2) . " ! <br><br>";
        echo "Você está Reprovado";
    } elseif ($media >= 4.0 && $media < 6.0) {
        echo "Olá $nome!. Sua média final baseada na sua primeira nota de: " . $nota1 . " e na segunda nota de " . $nota2 . " ficou em: " . round($media, 2) . " ! <br><br>";
        echo "Você está no Exame final!";
    } else {
        echo "Olá $nome!. Sua média final baseada na sua primeira nota de: " . $nota1 . " e na segunda nota de " . $nota2 . " ficou em: " . round($media, 2) . " ! <br><br>";
        echo "Você está Aprovado!!";
    }

    ?>

    <b>
        <p>Média Situação <br>
    </b>
    Abaixo de 4,0 Reprovado <br>

    Maior ou igual a quatro 4,0 e menor que 6.0 Exame final <br>

    Maior ou igual a 6,00 Aprovado <br>
    </p>
</body>

</html>