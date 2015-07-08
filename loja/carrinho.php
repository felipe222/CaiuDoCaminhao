<?php
      session_start();
       
      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }
       
      //adiciona produto
       
      if(isset($_GET['acao'])){
          
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'add'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               $_SESSION['carrinho'][$id] += 1;
            }
         }
          
         //REMOVER CARRINHO
         if($_GET['acao'] == 'del'){
            $id = intval($_GET['id']);
            if(isset($_SESSION['carrinho'][$id])){
               unset($_SESSION['carrinho'][$id]);
            }
         }
          
         //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['carrinho'][$id] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$id]);
                  }
               }
            }
         }
       
      }
       
       
?>
<?php
//ini_set("display_errors", "On");
include "includes/funcoes/funcoes.php";
$funcoes = new funcoes();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="<?php echo $funcoes->requestUrl();?>favicon.ico" />
        <link rel="stylesheet" href="<?php echo $funcoes->requestUrl(); ?>css/bootstrap-theme.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $funcoes->requestUrl(); ?>css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $funcoes->requestUrl(); ?>css/estilo.css" type="text/css" />
        <title>Caiu do Caminh�o - P�gina Inicial</title>
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
<body>

        <header class="col-md-12">
            <div class="container">
                <div class="col-md-4">
                    <?php require $funcoes->requestModules("logotipo"); ?>
                </div>
                <div class="col-md-4">
                    <?php require $funcoes->requestModules("pesquisar"); ?>
                </div>
            </div>
        </header>

        <nav class="col-md-12">
            <div class="container">
                <?php require $funcoes->requestModules("menu"); ?>
            </div>
        </nav>
        <div class="container">
            <table>
				<caption>Carrinho de Compras</caption>
				<thead>
					  <tr>
						<th width="244">Produto</th>
						<th width="79">Quantidade</th>
						<th width="89">valor</th>
						<th width="100">SubTotal</th>
						<th width="64">Remover</th>
					  </tr>
				</thead>
				<form action="?acao=up" method="post">
				<tfoot>
					   <tr>
						<td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
						<tr>
						<td colspan="5"><a href="index.php">Continuar Comprando</a></td>
				</tfoot>
				  
				<tbody>
						   <?php
								 if(count($_SESSION['carrinho']) == 0){
									echo '<tr><td colspan="5">Nao ha produto no carrinho</td></tr>';
								 }else{
									require("conexao/conexao.php");
																		   $total = 0;
									foreach($_SESSION['carrinho'] as $id => $qtd){
										  $sql   = "SELECT *  FROM produtos WHERE id= '$id'";
										  $qr    = mysqli_query($conexao, $sql) or die(mysql_error());
										  $ln    = mysqli_fetch_assoc($qr);
										   
										  $nome  = $ln['nome'];
										  $valor = number_format($ln['valor'], 2, ',', '.');
										  $sub   = number_format($ln['valor'] * $qtd, 2, ',', '.');
										   
										  $total += $ln['valor'] * $qtd;
										
									   echo '<tr>       
											 <td>'.$nome.'</td>
											 <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
											 <td>R$ '.$valor.'</td>
											 <td>R$ '.$sub.'</td>
											 <td><a href="?acao=del&id='.$id.'">Remove</a></br></td>
										  </tr>';
									}
									   $total = number_format($total, 2, ',', '.');
									   echo '<tr>
												<td colspan="4">Total</td>
												<td>R$ '.$total.'</td>
										  </tr>';
								 }
						   ?>
				
				 </tbody>
				</form>
			</table>
        </div>
        <footer class="col-md-12">
            <div class="container">
                <?php require $funcoes->requestModules("grupo"); ?>
            </div>
        </footer>

</body>
</html>
