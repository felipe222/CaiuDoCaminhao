<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <title>Home</title>
        <style>
            /* CSS PARA TESTE */
            * {
                margin: 0;
            }
            header {
                height: 120px;
                background: #999999;
            }
            nav {
                height: 50px;
                background: #666666;
            }
            main {
                min-height: 500px;
                background: #CCCCCC;
            }
            footer{
                height: 200px;
                background: #999999;
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
        <div class="container">
            <header class="col-md-12">
                <div class="col-md-4">
                    <?php require './includes/modulos/logotipo.php'; ?>
                </div>
                <div class="col-md-4">
                    <?php require './includes/modulos/pesquisar.php'; ?>
                </div>
                <div class="col-md-4">
                    <?php require './includes/modulos/carrinho.php'; ?>
                </div>
            </header>
            <nav class="col-md-12">
                 <?php require './includes/modulos/menu.php'; ?>
            </nav>
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
            <footer class="col-md-12">
                <div class="col-md-6">
                    <?php require './includes/modulos/copyright.php'; ?>
                </div>
                <div class="col-md-6">
                    <?php require './includes/modulos/grupo.php'; ?>
                </div>
            </footer>
        </div>
    </body>
</html>
