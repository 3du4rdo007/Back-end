<?php

class Paciente {
    private $PacienteID;
    private $Nome;
    private $Idade;
    private $Genero;

    public function getPACIENTEID() {
        return $this->PacienteID;
    }
    public function setPACIENTEID($PacienteID){
        $this->PacienteID = $PacienteID;
    }
    public function getNOME(){
        return $this->Nome;
    }
    public function setNOME($Nome){
        $this->Nome = $Nome;
    }
    public function getIDADE(){
        return $this->Idade; 
    }
    public function setIDADE($Idade){
        $this->Idade = $Idade;
    }
    public function getGENERO(){
        return $this->Genero;
    }
    public function setGENERO($Genero){
        $this->Genero = $Genero;
    }
}
?>
