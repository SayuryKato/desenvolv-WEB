<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio RU - Cardapio</title>
    <link rel="stylesheet" href="../style/cardapio.css">
    <link rel="stylesheet" href="../global.css">
</head>

<body>
    <main class="containerDivisao">
        <div class="aside">
            <?php include "../components/aside.php" ?>
        </div>

        <div class="search-container">
            <input type="search" name="" id="pesquisa" placeholder="Digite algo">
            <img class="icon-lupa" src="../assets/icons/lupa.png" alt="Custom Icon">
        </div>

        <div id="content">
            <div class="square">
                <a href="../pages/paginasCardapio/cafe.php">
                    <div class="circle-big">
                        <img class="icon" src="../assets/icons/cafe.png" alt="Custom Icon">
                    </div>
                    <h3>Cafe da manhã</h3>
                </a>
                <div class="circle-small">
                    <img class="icon-small" src="../assets/icons/seta.png" alt="Custom Icon">
                </div>
            </div>

            <div class="square">
                <a href="../pages/paginasCardapio/lanche.php">
                    <div class="circle-big">
                        <img class="icon" src="../assets/icons/hamburguer.png" alt="Custom Icon">
                    </div>
                    <h3>Lanche</h3>
                </a>
                <div class="circle-small">
                    <img class="icon-small" src="../assets/icons/seta.png" alt="Custom Icon">
                </div>
            </div>

            <div class="square">
                <a href="../pages/paginasCardapio/almoco.php">
                    <div class="circle-big">
                        <img class="icon" src="../assets/icons/almoço.png" alt="Custom Icon">
                    </div>
                    <h3>Almoço</h3>
                </a>
                <div class="circle-small">
                    <img class="icon-small" src="../assets/icons/seta.png" alt="Custom Icon">
                </div>
            </div>

            <div class="square">
                <a href="../pages/paginasCardapio/janta.php">
                    <div class="circle-big">
                        <img class="icon" src="../assets/icons/jantar.png" alt="Custom Icon">
                    </div>
                    <h3>Jantar</h3>
                </a>
                <div class="circle-small">
                    <img class="icon-small" src="../assets/icons/seta.png" alt="Custom Icon">
                </div>
            </div>
        </div>
    </main>
</body>

</html>
