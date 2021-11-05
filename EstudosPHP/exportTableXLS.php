<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Determina que o arquivo é uma planilha do Excel
        header("Content-type: application/vnd.ms-excel");   

        // Força o download do arquivo
        header("Content-type: application/force-download");  

        // Seta o nome do arquivo
        header("Content-Disposition: attachment; filename=file.xls");

        // Não salvar cache
        header("Pragma: no-cache");

        // Tabela com dados
        $html = "
        <table width='90%' border='1'>
            <tr>
                <th>Título </th>
                <th>Título 2</th>
                <th>Título 3</th>
            </tr>
            <tr>
                <td>Dados 1</td>
                <td>Dados 2</td>
                <td>Dados 3</td>
            </tr>
            <tr>
                <td>Dados 4</td>
                <td>Dados 5</td>
                <td>Dados 6</td>
            </tr>
            <tr>
                <td>Dados 7</td>
                <td>Dados 8</td>
                <td>Dados 9</td>
            </tr>
        </table>
        ";

        // Imprime o conteúdo da nossa tabela no arquivo que será gerado
        echo $html;
    ?>
</body>
</html>