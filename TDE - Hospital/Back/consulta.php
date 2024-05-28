<?php
class Consulta {
    private $ConsultaID;
    private $PacienteID;
    private $MedicoID;
    private $DataConsulta;

    public function getCONSULTAID(){
        return $this->ConsultaID;
    }
    public function setCONSULTAID($ConsultaID){
        $this->ConsultaID = $ConsultaID;
    }
    public function getPACIENTE(){
        return $this->PacienteID;
    }
    public function setPACIENTE($PacienteID){
        $this->PacienteID = $PacienteID;
    }
    public function getMEDICO(){
        return $this->MedicoID;
    }
    public function setMEDICO($MedicoID){
        $this->MedicoID = $MedicoID;
    }
    public function getDATACONSULTA(){
        return $this->DataConsulta;
    }
    public function setDATACONSULTA($DataConsulta){
        $this->DataConsulta = $DataConsulta;
    }
}
?>
