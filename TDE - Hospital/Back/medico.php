<?php
class Medico {
    private $MedicoID;
    private $Nome;
    private $Especialidade;
    private $CRM;

    public function getMEDICOID(){
        return $this->MedicoID;
    }
    public function setMEDICOID($MedicoID){
        $this->MedicoID = $MedicoID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function setNOME($Nome){
        $this->Nome = $Nome;
    }
    public function getESPECIALIDADE(){
        return $this->Especialidade;
    }
    public function setESPECIALIDADE($Especialidade){
        $this->Especialidade = $Especialidade;
    }
    public function getCRM(){
        return $this->CRM;
    }
    public function setCRM($CRM){
        $this->CRM = $CRM;
    }
}
?>
