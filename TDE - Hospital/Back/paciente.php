<?php
class Paciente {
    private $nome;
    private $idade;
    private $genero;

    public function __construct($nome, $idade, $genero) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }
}
?>
