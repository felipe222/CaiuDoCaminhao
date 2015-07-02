<?php
//require_once '../../conexao/conexao.php';
//require_once '../../conexao/crudGeral.php';
    // CONEXÃO PARA TESTE
//    ini_set("display_erros", "On");
    $conexao = mysqli_connect("localhost", "root", "", "caiudocaminhao");
//$con = new conexao(); 
//$con->connect();
    $sql = "SELECT * FROM menu ORDER BY nome ASC LIMIT 6";
    $categorias = mysqli_query($conexao, $sql);
    while($categoria = $categorias->fetch_array()) { ?>
<div class="col-md-4" style="text-align: center;"><a href="index.php?pagina=<?php echo $categoria['alias'];?>"><?php echo $categoria['nome'];?></a></div>
    <?php } ?>
    <?php // $con->disconnect(); ?>
