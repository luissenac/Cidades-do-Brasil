<?php

echo "Primeira linha: em casa - PHP";
echo "Segunda linha PC 1: Senac";



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
        <p>Primeira linha: em casa</p>
        <p>Segunda linha PC 1: Senac</p>
    </body>
</html>