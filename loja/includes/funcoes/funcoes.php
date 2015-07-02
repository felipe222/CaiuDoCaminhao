<?php

class funcoes {

    public function getPastaProjeto() {
        return "projeto/CaiuDoCaminhao/loja/";
    }
    public function getCaminhoAbsoluto() {
        return $_SERVER[DOCUMENT_ROOT]."projeto/CaiuDoCaminhao/loja/";
    }

    function requestUrl() {
        return "http://" . $_SERVER[HTTP_HOST] . "/" . $this->getPastaProjeto();
    }

    function requestPage($pagina) {
        switch ($pagina) {
            case "produto":
                require $this->getCaminhoAbsoluto().'includes/paginas/produto.php';
                break;
            case "categoria":
                require $this->getCaminhoAbsoluto(). 'includes/paginas/categoria.php';
                break;
            case "carrinho":
                require $this->getCaminhoAbsoluto(). 'includes/paginas/carrinho.php';
                break;
        }
    }

    function requestPageAdmin($pagina) {
        switch ($pagina) {
            case "categoria":
                require $this->getCaminhoAbsoluto(). '/admin/cadCategoria.php';
                break;
            default : 
                require $this->getCaminhoAbsoluto(). '/admin/admin.php';
        }
    }

    function requestModules($nomeArquivo) {
        return $_SERVER[DOCUMENT_ROOT] . "" . $this->getPastaProjeto() . "includes/modulos/" . $nomeArquivo . ".php";
    }

}
