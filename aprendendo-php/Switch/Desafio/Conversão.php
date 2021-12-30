<h1>Desafio Swhitch</h1>
<form action = "#" method = "post">
    <input type = "text" name = "param">
    <select name="conversao" id="conversao">
        <option value="km-Milha">Km > Milha</option>
        <option value="Milha-KM">Milha > Km</option>
        <option value="Metro-Km">Metro > Km</option>
        <option value="Km-Metro">Km > Milha</option>
    </select>
    <button>Calcular</button>
</form>

<?php


const KM_TO_MILHA = 0.621371;
const METRO_TO_KM = 1000;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-Milha':
        $distancia = $param * KM_TO_MILHA;
        $mensagem = "$param Km = $distancia milhas";
        break;
    
    case 'Milha-KM':
        $distancia = $param / KM_TO_MILHA;
        $mensagem = "$param Km = $distancia milhas";
        break;
    
    case 'Metro-Km':
        $distancia = $param / 1000;
        $mensagem = "$param m = $distancia Km";
        break;

    case 'Km-Metro':
        $distancia = $param * 1000;
        $mensagem = "$param Km = $distancia m";
        break;
    
    default:
        $mensagem = "Nenhum valor informado!!";
}
echo "<p>$mensagem</p>";
?>