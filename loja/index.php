<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
        <title>Home</title>
        <style>
            /* CSS PARA TESTE */
            * {
                margin: 0;
            }
            
            
            .col-md-2 img {
                width: 100%;
            }
            .col-md-4 input[type="text"] {
                width:90%;
                margin-top:50px;
            }
        </style>
    </head>
    <body>

            <header class="col-md-12">
                <div class="container">
                    <div class="col-md-4">
                        <?php require './includes/modulos/logotipo.php'; ?>
                    </div>
                    <div class="col-md-4">
                        <?php require './includes/modulos/pesquisar.php'; ?>
                    </div>
                    <div class="col-md-4">
                        <?php require './includes/modulos/carrinho.php'; ?>
                    </div>
                </div>
            </header>
        
            <nav class="col-md-12">
                 <div class="container">
                    <?php require './includes/modulos/menu.php'; ?>
                 </div>
            </nav>
        <div class="container">
            <main class="col-md-12">
                <?php
                if(isset($_GET['pagina'])) {
                    switch($_GET['pagina']) {
                        case "produto":
                            require './includes/paginas/produto.php';
                            break;
                        case "categoria":
                            require './includes/paginas/categoria.php';
                            break;
                        case "carrinho":
                            require './includes/paginas/carrinho.php';
                            break;
                    }
                }
                else {
                    require './includes/paginas/home.php';   
                }
                ?>
            </main>
        </div>
            <footer class="col-md-12">
                <div class="container">
                    <?php require './includes/modulos/grupo.php'; ?>
                </div>
            </footer>
        
    </body>
</html>
