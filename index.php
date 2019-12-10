<?php

echo "Primeira linha: em casa - PHP";
echo "Segunda linha PC 1: Senac";
echo "Terceira linha GITHUB: Senac";


$url = file_get_contents('http://www.bcb.gov.br/');
preg_match_all('/ORES-->(.+)<!--/s', $url, $conteudo);
$exibir = $conteudo[0][0];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h1>Exemplo de site no GitHub</h1>
        <p>Primeira linha no PC 1</p>
        <p>Segunda linha no Github</p>

    </body>
</html>
