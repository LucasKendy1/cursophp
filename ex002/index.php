<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro script</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        $nome = "Lucas Kendy"; 
        echo"<p>O meu nome é $nome</p>";
        echo "Hoje é dia ".date("d/M/Y");
        echo "e a hora atual é " . date("G:i:s T");
    ?>

    <?="<p>ola mundo, meu nome é $nome</p>"//echo simples nao precisa escrever echo
    //tbm n precisa de ponto e virgula?>

    <?
        //testando short open tags
        //habilitadas nas configs php.ini
        echo"ola mundo nas short open tags";

    ?>
</body>
</html>