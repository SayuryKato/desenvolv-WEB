<?php
// session_start();
$nomeUsuario = $_SESSION['email'];
// Obtém o nome da página atual
$current_page = basename($_SERVER['PHP_SELF']);
// Função para verificar se a página atual corresponde ao link

function isActive($page_name, $current_page)
{
    return ($page_name === $current_page) ? 'active' : '';
}

?>

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<div>
    <figure class="fotoPerfil">
        <a href="../pages/perfil.php">
            <img class="imgPequena" src="../assets/logoUea.png" alt="Logo da UEA">
        </a>
    </figure>
    <div class="menuAside">
        <div class="marginLeft">
            <p class="nomeUsur">Fabilo Paule</p>
            <p>
                <?php
                echo $nomeUsuario;
                ?>
            </p>
        </div>
        <div>
            <p class="letraFina">Principal</p>
            <ul>
                <li class="<?= isActive('cardapio2.php', $current_page) ?>">
                    <div class="marginLeft central">
                        <span class="material-symbols-outlined">
                            restaurant_menu
                        </span>
                        <a class="marginLeft" href="cardapio2.php">Cardapio</a>
                    </div>
                </li>
                <li class="<?= isActive('carteiraVisual.php', $current_page) ?>">
                    <div class="marginLeft central">
                        <span class="material-symbols-outlined">
                            id_card
                        </span>
                        <a class="marginLeft" href="carteiraVisual.php">Carteira</a>
                    </div>
                </li>
                <li class="<?= isActive('perfil.php', $current_page) ?>">
                    <div class="marginLeft central">
                        <img class="icone" src="../assets/icons/user.png" alt="">
                        <a class="marginLeft" href="perfil.php">Perfil</a>
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <p class="letraFina">Outros</p>
            <ul>
                <li class="<?= isActive('fale_conosco.php', $current_page) ?>">
                    <div class="marginLeft central">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <a class="marginLeft" href="mailto:skdp.ecp19@uea.edu.br">Fale Conosco</a>
                    </div>
                </li>
                <li class="<?= isActive('sobre.php', $current_page) ?>">
                    <div class="marginLeft central">
                        <span class="material-symbols-outlined">
                            info
                        </span>
                        <a class="marginLeft" href="sobre.php">Sobre</a>
                    </div>
                </li>
                <li>
                    <div class="marginLeft central">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        <a class="marginLeft" href="../function/sair.php">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>