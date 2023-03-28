<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/style.css">
        <title>Resultado IMC</title>
    </head>
    <body class="imc-page">
        <div class="container-imc resultado-imc">
            <h1>RESULTADO DO SEU IMC</h1>
            <?php
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $alturaATT = str_replace(",", ".", $altura);
            $imc = $peso / ($alturaATT * $alturaATT);

            echo "Seu IMC baseado na sua altura de ". $altura . " e peso de ". $peso . " ficou em: ". round($imc, 2) . " ! <br><br>";

            if ($imc < 17) {
                echo "<b>Baseado no seu IMC, você está: Muito abaixo do peso</b> <br>";
            } elseif ($imc > 17 && $imc <= 18.49) {
                echo "<b>Baseado no seu IMC, você está: abaixo do peso</b>";    
            } elseif ($imc >= 18.5 && $imc <= 24.99) {
                echo "<b>Baseado no seu IMC, você está: Peso normal</b>";    
            } elseif ($imc >= 25 && $imc <= 29.99) {
                echo "<b>Baseado no seu IMC, você está: Acima do peso</b>";    
            }
            elseif ($imc >= 30 && $imc <= 34.99) {
                echo "<b>Baseado no seu IMC, você está: Obesidade I</b>";    
            }
            elseif ($imc >= 35 && $imc <= 39.99) {
                echo "<b>Baseado no seu IMC, você está: Obesidade II (severa)</b>";    
            }
            else {
                echo "<b>Baseado no seu IMC, você está: Obesidade III (mórbida)</b>";    
            }
            ?>

            <p>Valores para referência: <br>
            <table>
                <tr>
                    <th>Resultado</th>
                    <th>Situação</th>
                </tr>
                <tr>
                    <td>Abaixo de 17</td>
                    <td>Muito abaixo do peso</td>
                </tr>
                <tr>
                    <td>Entre 17 e 18,49</td>
                    <td>Abaixo do peso</td>
                </tr>
                <tr>
                    <td>Entre 18,5 e 24,99</td>
                    <td>Peso normal</td>
                </tr>
                <tr>
                    <td>Entre 25 e 29,99</td>
                    <td>Acima do peso</td>
                </tr>
                <tr>
                    <td>Entre 30 e 34,99</td>
                    <td>Obesidade I</td>
                </tr>
                <tr>
                    <td>Entre 35 e 39,99</td>
                    <td>Obesidade II (severa)</td>
                </tr>
                <tr>
                    <td>Acima de 40</td>
                    <td>Obesidade III (mórbida)</td>
                </tr>
            </table>
            <div class="btn-topo">
                <a href="../notas/form_notas.php" class="voltar">Calcular Nota</a>
            </div>
            <div class="btn-topo">
                <a href="form_imc.php" class="voltar">Voltar</a>
            </div>
        </div>
    </body>
</html>