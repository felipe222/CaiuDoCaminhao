<?php
    // CONEXÃO PARA TESTE
    $conexao = mysqli_connect("localhost", "root", "", "caiudocaminhao");
    $sql = "SELECT * FROM categorias WHERE id = {$_GET['id']}";
    $categoria = mysqli_query($conexao, $sql)->fetch_array();
?>

<div class="col-md-12 categoria">
    <h1><?php echo $categoria['nome'];?></h1>
    <p><?php echo $categoria['descricao'];?></p>
    <?php
        // CONEXÃO PARA TESTE
        $sql = "SELECT * FROM produtos WHERE idCategoria = {$_GET['id']}";
        $produtos = mysqli_query($conexao, $sql);
        while($produto = $produtos->fetch_array()) { ?>
            <div class="col-md-2 produto">
                <a href="index.php?pagina=produto&id=<?php echo $produto['id']; ?>">
                    <h2><?php echo $produto['nome']; ?></h2>
                    <img src="<?php echo $produto['foto']; ?>" />
                    <p>R$ <?php echo $produto['valor']; ?></p>
                </a>
            </div>
        <?php } ?>
</div>