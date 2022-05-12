<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estado.css">
    <title>Qual o seu estado?</title>
</head>

<body>
    <h2>A regiao que você mora é:</h2>
    <?php

    $estado = $_GET["status"];

    switch ($estado) {
        case "Rio Grande do Sul (RS)":
        case "Paraná (PR)":
        case "Santa Catarina (SC)":
            echo "SUL e $estado";
            echo "<img src='regiaosul.png'/>";
            break;

        case "Minas Gerais (MG)";
        case "São Paulo (SP)";
        case "Rio de Janeiro (RJ)";
        case "Espírito Santo (ES)";
            echo "SUDESTE";
            echo "<img src='regiaosudeste.png'/>";
            break;

        case "Mato Grosso (MT)";
        case "Mato Grosso do Sul (MS)";
        case "Goiás (GO)";
            echo "CENTRO-OESTE";
            echo "<img src='regiaocentrooeste.png'/>";
            break;

        case "Maranhão (MA)";
        case "Piauí (PI)";
        case "Ceará (CE)";
        case "Rio Grande do Norte (RN)";
        case "Pernambuco (PE)";
        case "Paraíba (PB)";
        case "Sergipe (SE)";
        case "Alagoas (AL)";
        case "Bahia (BA)";
            echo "NORDESTE";
            echo "<img src='regiaonordeste.png'/>";
            break;

        case "Amazonas (AM)";
        case "Roraima (RR)";
        case "Amapá (AP)";
        case "Pará (PA)";
        case "Tocantins (TO)";
        case "Rondônia (RO)";
        case "Acre (AC)";
            echo "NORTE";
            echo "<img src='regiaonorte.png'/>";
            break;

            default:
            echo "Volte e selecione o seu estado";
            echo "<img src='triste.png'/>";
    }
    ?>
    <p><a href="index.html"><button>Voltar</button></a></p>

</body>

</html>
