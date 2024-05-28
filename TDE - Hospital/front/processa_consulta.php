<?php
include('C:\localhost\TDE - Hospital\conexao.php');
include('C:\localhost\TDE - Hospital\Back\consulta.php');
include('C:\localhost\TDE - Hospital\Back\consultaDAO.php');
include('C:\localhost\TDE - Hospital\Back\pacienteDAO.php');
include('C:\localhost\TDE - Hospital\Back\medicoDAO.php');

$ConsultaDAO = new ConsultaDAO();
$PacienteDAO = new PacienteDAO();
$MedicoDAO = new MedicoDAO();

$Pacientes = $PacienteDAO->read();
$Medicos = $MedicoDAO->read();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $PacienteID = $_POST['paciente'];
    $MedicoID = $_POST['medico'];
    $DataConsulta = $_POST['dataConsulta'];

    $Consulta = new Consulta();
    $Consulta->setPACIENTE($PacienteID);
    $Consulta->setMEDICO($MedicoID);
    $Consulta->setDATACONSULTA($DataConsulta);

    $ConsultaDAO->create($Consulta);

    // Redireciona para a mesma página usando o método GET para evitar duplicação de submissão
    header("Location: consulta.php?success=1");
    exit;
}

$Consultas = $ConsultaDAO->read();
?>