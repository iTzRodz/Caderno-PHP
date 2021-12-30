<?php

$matriz = [
    ["01", "02", "03", "04", "05"],
    ["06", "07", "08", "09", "10"],
    ["10", "11", "12", "13", "14"],
    ["15", "16", "17", "18", "19"],
    ["20", "21", "22", "23", "24"],
];
?>

<table>
    <?php
        foreach ($matriz as $linha) {
            echo "<tr>";
            foreach ($linha as $valor) {
                if ($valor > 19) {
                    break;
                }
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
    ?>
</table>
<hr>

<!-- Explicação do operador ternário:
    // condição ? valor se for verdareiro : valor se for falso -->
<table>
    <?php
    foreach ($matriz as $indice => $linha) {

        $style = $indice % 2 === 1 ? 'background-color: lightblue;' : '';
        echo "<tr style = '{$style}'>";
        foreach ($linha as $valor) {
            echo "<td>$valor</td>";
           
        }
        echo "</tr>";
    } 
    
    ?>
</table>



<style>
    *{
        font-size: 20px;
        text-align: center;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
        text-align: center;
    }

    table tr {
        border:1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>