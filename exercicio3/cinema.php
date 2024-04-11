<?php

//Desenvolvido por Álysson Davi, Luis Eduardo Monteiro, Pedro Lucas Pierre, Olavo Regis, Aristóteles Neto

class Filme {
  
  protected $idcliente;
  protected $idsala;
  protected $idingresso;

  public function getIdcliente(){
    return $this->idcliente;
  }

  public function getIdsala(){
    return $this->idsala;
  }

  public function getIdingresso(){
    return $this->idingresso;
  }

  public function setIdcliente($idcliente){
    $this->idcliente = $idcliente;
  }

  public function setIdsala($idsala){
    $this->idsala = $idsala;
  }

  public function setIdingresso($idingresso){
    $this->idingresso = $idingresso;
  }
  
}

class Vendedor{

  protected $idfilme;
  protected $idcliente;

  public function GetIdfilme(){
    return $this->idfilme;
  }

  public function GetIdcliente(){
    return $this->idcliente;
  }

  public function setIdfilme($idfilme){
    $this->idfilme = $idfilme;
  }

  public function setIdcliente($idcliente){
    $this->idcliente = $idcliente;
  }

}

$filme1 = new Filme();
$filme1->setIdcliente("Olavo do fax");
$filme1->setIdsala(2);
$filme1->setIdingresso(5314155);

$idcliente = $filme1->getIdcliente();
$idsala = $filme1->getIdsala();
$idingresso = $filme1->getIdingresso();

$vendedor1 = new Vendedor();
$vendedor1->setIdfilme("Vingadores");
$vendedor1->setIdcliente("Olavo do fax");

$idfilme = $vendedor1->getIdfilme();
$idcliente = $vendedor1->getIdcliente();


echo "***********************\n";
echo "O cliente $idcliente, com o ingresso de número $idingresso, pode assistir o filme $idfilme, na sala $idsala\n";
echo "***********************\n";

?>
