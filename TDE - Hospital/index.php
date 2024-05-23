<?php

@include('conexao.php'); 
@include('C:\localhost\TDE - Hospital\Back\medico.php');
@include('C:\localhost\TDE - Hospital\Back\medicoDAO.php');
$sql = 'INSERT INTO Medico (MedicoID, Nome, Especialidade, CRM) VALUES (?,?,?,?)';
$Medico = new Medico(0,0,0,0);
$MedicoDAO = new MedicoDAO();

$host = "localhost";
$port = "5432";
$user = "postgres";
$password = "postgres";
$database = "Hospital";

$MedicoID = 1;
$Nome = "Teste";
$Especialidade = "rwardsa";
$CRM ="adasfafssdg";

$bd = Conexao::getConn()->prepare($sql);

$conn = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$Medico->setMEDICOID($MedicoID);
$Medico->setNOME($Nome);
$Medico->setESPECIALIDADE($Especialidade);
$Medico->setCRM($CRM);

$MedicoDAO->create($Medico);5

?>