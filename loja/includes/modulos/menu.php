<?php
    // CONEXÃO PARA TESTE
    $conexao = mysqli_connect("localhost", "root", "", "caiudocaminhao");
    $sql = "SELECT * FROM categorias ORDER BY nome ASC LIMIT 6";
    $categorias = mysqli_query($conexao, $sql);
    while($categoria = $categorias->fetch_array()) { ?>
<div class="col-md-2"><a href="index.php?pagina=categoria&id=<?php echo $categoria['id'];?>"><?php echo $categoria['nome'];?></a></div>
    <?php } ?>
