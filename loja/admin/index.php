<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
        <title>Home</title>
        <style>
            /* CSS PARA TESTE */
            * {
                margin: 0;
            }
            header {
                height: 200px;
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
        </style>
    </head>
    <body>
        <div class="container">
            <header class="col-md-12">
                <div class="col-md-6">
                    <?php require '../includes/modulos/logotipo.php'; ?>
                </div>
                <div class="col-md-6">
                    <?php require '../includes/modulos/pesquisar.php'; ?>
                </div>
            </header>
            <nav class="col-md-12">
                 <?php require '../includes/modulos/menu.php'; ?>
            </nav>
            <main class="col-md-12">
                <?php
//                die(var_dump($_GET['pagina']));
                if(isset($_GET['pagina'])) {                    
                    switch($_GET['pagina']) {
                        case "categoria":
                            require './cadCategoria.php';
                            break;
                    }
                }
                else {
                    require '../includes/paginas/home.php';   
                }
                ?>
            </main>
            <footer class="col-md-12">
                <div class="col-md-6">
                    <?php require '../includes/modulos/copyright.php'; ?>
                </div>
                <div class="col-md-6">
                    <?php require '../includes/modulos/grupo.php'; ?>
                </div>
            </footer>
        </div>
    </body>
</html>
