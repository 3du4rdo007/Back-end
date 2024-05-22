<?php
class Consulta {
    private $paciente;
    private $medico;
    private $data;

    public function __construct($paciente, $medico, $data) {
        $this->paciente = $paciente;
        $this->medico = $medico;
        $this->data = $data;
    }

    public function getPaciente() {
        return $this->paciente;
    }

    public function getMedico() {
        return $this->medico;
    }

    public function getData() {
        return $this->data;
    }

    public function setPaciente($paciente) {
        $this->paciente = $paciente;
    }

    public function setMedico($medico) {
        $this->medico = $medico;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function imprimirDetalhes() {
        echo "Consulta marcada para " . $this->data . ":\n";
        echo "Paciente: " . $this->paciente->getNome() . "\n";
        echo "Idade: " . $this->paciente->getIdade() . "\n";
        echo "Médico: " . $this->medico->getNome() . " (" . $this->medico->getEspecialidade() . ")\n";
        echo "CRM: " . $this->medico->getCrm() . "\n";
    }
}
?>
