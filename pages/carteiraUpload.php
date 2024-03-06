<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira Estudante</title>
    <link rel="stylesheet" href="../style/carteirta.css">
    <link rel="stylesheet" href="../global.css">
</head>

<body>
    <main class="containerDivisao">
        <div class="aside">
            <?php include "../components/aside.php" ?>
        </div>
        <div class="segundaTela">
            <p class="txtAtencao">Nenhuma Carteira Cadastrada!</p>
            <div class="drop_zone">
                <div class="iconTxt">
                    <img src="../assets/icons/upload.png" alt="">
                    <p>Arraste e solte aqui.</p>
                    <p>OU</p>
                    <div>
                        <label class="botao" for='selecao-arquivo'>Fazer Upload</label>
                        <input id='selecao-arquivo' type='file' class="fileInput" accept="image/*">
                    </div>
                </div>
                <input type="file" class="fileInput" accept="image/*" multiple>
            </div>
        </div>
    </main>

    <script>
    var dropZone = document.getElementById('drop_zone');
    var fileInput = document.getElementById('fileInput');

    dropZone.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropZone.style.backgroundColor = '#f0f0f0';
    });

    dropZone.addEventListener('dragleave', function(e) {
        e.preventDefault();
        dropZone.style.backgroundColor = '#ffffff';
    });

    dropZone.addEventListener('drop', function(e) {
        e.preventDefault();
        dropZone.style.backgroundColor = '#ffffff';

        var files = e.dataTransfer.files;
        fileInput.files = files;

        // Aqui você pode realizar ações com os arquivos, como carregá-los ou processá-los
    });

    dropZone.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function() {
        var files = fileInput.files;
        // Aqui você pode realizar ações com os arquivos selecionados, como carregá-los ou processá-los
    });
    </script>
</body>

</html>