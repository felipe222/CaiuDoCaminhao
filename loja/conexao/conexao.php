<?php
include_once "./conexao.dados.php";

class conexao {
    private $conect = false;

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
            $conexao = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
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