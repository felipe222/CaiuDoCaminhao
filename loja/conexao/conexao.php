<?php

//include_once "./conexao.dados";

class conexao {

    private $db_host = 'localhost'; // servidor
    private $db_user = 'root'; // usuario do banco
    private $db_pass = ''; // senha do usuario do banco
    private $db_name = 'caiudocaminhao'; // nome do banco
    private $conect = false;

    public function getConexao(){
        return mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    }
    /*
     * Função de abrir conexão 
     * e estabelecendo que só existe uma conexão abriremos a única conexão
     * Se voltar false é que não abriu a conexão
     * @return true
     * 
     */

    public function connect() {
        if (!$this->conect) {
//            Parametros da conexão (usando o mysqli, pois o mysql está deprected)
           $conexao = $this->getConexao();            
            if ($conexao) {
                $this->conect = true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    } 

    /*
     * Função de fechar conexão 
     * e estabelecendo que só existe uma conexão fecharemos a única conexão
     * Se voltar false é que não fechou a conexão
     * @return true
     * 
     */

    public function disconnect() {
        if ($this->con) {
            if (mysqli_close()) {
                $this->con = false;
                return true;
            } else {
                return false;
            }
        }
    }

}

?>