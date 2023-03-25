<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
</head>
<body>
<H1>RESULTADO DO SEU IMC</H1>
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

Resultado	Situação<br><br>
Abaixo de 17	Muito abaixo do peso<br>
Entre 17 e 18,49	Abaixo do peso<br>
Entre 18,5 e 24,99	Peso normal<br>
Entre 25 e 29,99	Acima do peso<br>
Entre 30 e 34,99	Obesidade I<br>
Entre 35 e 39,99	Obesidade II (severa)<br>
Acima de 40	Obesidade III (mórbida)<br>
</p>
</body>
</html>