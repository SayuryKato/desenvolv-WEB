
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cardapioru";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio RU - Cardapio</title>
    <link rel="stylesheet" href="../../style/paginasCartapio.css">
    


</head>

<body>   

<div id="content">
        <h1>Cardápio da Semana - Lanche</h1>
        <?php
        

        $diasSemana = ["Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
        $refeicaoId = 2; // ID da refeição para lanche

        foreach ($diasSemana as $dia) {
            echo "<h2>$dia</h2>";

            $sql = "SELECT conteudoCardapio FROM Cardapio WHERE idRefeicao = $refeicaoId AND idDiaSemana = (SELECT idDiaSemana FROM DiaSemana WHERE nomeDiaSemana = '$dia')";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>{$row['conteudoCardapio']}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Nenhum cardápio disponível para este dia.</p>";
            }
        }

        $conn->close();
        ?>
    </div>
    
</body>

</html>