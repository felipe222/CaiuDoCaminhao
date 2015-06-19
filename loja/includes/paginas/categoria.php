<?php
    // CONEXÃO PARA TESTE
    $conexao = mysqli_connect("localhost", "root", "", "caiudocaminhao");
    $sql = "SELECT * FROM categorias WHERE id = {$_GET['id']}";
    $produto = mysqli_query($conexao, $sql)->fetch_array();
?>

<div class="col-md-12">
    <h1><?php echo $produto['nome'];?></h1>
    <?php
        // CONEXÃO PARA TESTE
        $sql = "SELECT * FROM produtos WHERE idCategoria = {$_GET['id']}";
        $produtos = mysqli_query($conexao, $sql);
        while($produto = $produtos->fetch_array()) { ?>
            <div class="col-md-2">
                <a href="index.php?pagina=produto&id=<?php echo $produto['id']; ?>">
                    <h2><?php echo $produto['nome']; ?></h2>
                    <img src="<?php echo $produto['foto']; ?>" />
                    <p><?php echo $produto['valor']; ?></p>
                </a>
            </div>
        <?php } ?>
</div>