<?php
class Medico {
    private $nome;
    private $especialidade;
    private $crm;

    public function __construct($nome, $especialidade, $crm) {
        $this->nome = $nome;
        $this->especialidade = $especialidade;
        $this->crm = $crm;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getCrm() {
        return $this->crm;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setCrm($crm) {
        $this->crm = $crm;
    }
}
?>
