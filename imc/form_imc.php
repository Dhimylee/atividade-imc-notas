<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/style.css">
        <title>IMC</title>
    </head>
    <body class="imc-page">
        <div class="container-imc">
            <h1>CALCULAR IMC</h1>
            <p>Fórmula: IMC = PESO/(ALTURA*ALTURA).</p><br>
            <form action="resultado_imc.php" method="post">
                <p>Seu peso: <input type="text" name="peso" /></p>
                <p>Sua altura: <input type="text" name="altura"/></p>
                <input type="submit" />
            </form> 
            <div class="btn-topo">
                <a href="../index.html" class="voltar">Voltar</a>
            </div> 
        </div>
    </body>
</html>
