<?php
class Consulta {
    private $ConsultaID;
    private $Paciente;
    private $Medico;
    private $DataConsulta;

    public function getCONSULTAID(){
        return $this->ConsultaID;
    }
    public function setCONSULTAID($ConsultaID){
        $this->ConsultaID = $ConsultaID;
    }
    public function getPACIENTE(){
        return $this->Paciente;
    }
    public function setPACIENTE($Paciente){
        $this->Paciente = $Paciente;
    }
    public function getMEDICO(){
        return $this->Medico;
    }
    public function setMEDICO($Medico){
        $this->Medico = $Medico;
    }
    public function getDATACONSULTA(){
        return $this->DataConsulta;
    }
    public function setDATACONSULTA($DataConsulta){
        $this->DataConsulta = $DataConsulta;
}
?>
