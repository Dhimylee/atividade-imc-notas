<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/style.css">
        <title>NOTAS</title>
    </head>
    <body class="notas-page">>
        <div class="container-notas">
            <h1>CALCULAR NOTAS</h1>
            <p>a fórmula: média = (nota1 + nota2)/2.</p><br>
            <form action="resultado_notas.php" method="post">
                <p>Seu nome: <input type="text" name="nome"></p>
                <p>Sua nota1: <input type="number" name="nota1" /></p>
                <p>Sua nota2: <input type="number" name="nota2"/></p>
                <input type="submit" />
            </form>  
            <div class="btn-topo">
                <a href="../index.html" class="voltar voltar-notas">Voltar</a>
            </div> 
        </div>
    </body>
</html>