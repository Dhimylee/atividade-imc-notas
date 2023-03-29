<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/style.css">
        <title>Notas</title>
    </head>

    <body class="notas-page">
        <div class="container-imc resultado-imc">
            <H1>RESULTADO DA SUA MÉDIA</H1>
            <?php
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];
            $nome = $_POST['nome'];
            $media = ($nota1 + $nota2) / 2;

            if ($media < 4.0) {
                echo "Olá $nome! Sua média final baseada na sua primeira nota de: " . $nota1 . " e na segunda nota de " . $nota2 . " ficou em: " . round($media, 2) . " ! <br><br>";
                echo "Você está Reprovado";
            } elseif ($media >= 4.0 && $media < 6.0) {
                echo "Olá $nome! Sua média final baseada na sua primeira nota de: " . $nota1 . " e na segunda nota de " . $nota2 . " ficou em: " . round($media, 2) . " ! <br><br>";
                echo "Você está no Exame final!";
            } else {
                echo "Olá $nome! Sua média final baseada na sua primeira nota de: " . $nota1 . " e na segunda nota de " . $nota2 . " ficou em: " . round($media, 2) . " ! <br><br>";
                echo "Você está Aprovado!!";
            }

            ?>

                <p>Valores para referência:</p>
                <table>
                    <tr>
                        <th>Média</th>
                        <th>Situação</th>
                    </tr>
                    <tr>
                        <td>Abaixo de 4,0</td>
                        <td>Reprovado</td>
                    </tr>
                    <tr>
                        <td>Maior ou igual a quatro 4,0</td>
                        <td>Exame final</td>
                    </tr>
                    <tr>
                        <td>Menor que 6.0</td>
                        <td>Exame final</td>
                    </tr>
                    <tr>
                        <td>Maior ou igual a 6,00</td>
                        <td>Aprovado</td>
                    </tr>
                </table>
                <div class="btn-topo">
                    <a href="../imc/form_imc.php" class="voltar">Calcular IMC</a>
                </div>
                <div class="btn-topo">
                    <a href="/form_notas.php" class="voltar">Voltar</a>
                </div>
        </div>
     </body>

</html>
