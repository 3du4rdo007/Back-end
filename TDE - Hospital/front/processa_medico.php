<?php
include('C:\localhost\TDE - Hospital\conexao.php');
include('C:\localhost\TDE - Hospital\Back\medico.php');
include('C:\localhost\TDE - Hospital\Back\medicoDAO.php');

$MedicoDAO = new MedicoDAO();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nome = $_POST['nome'];
    $Especialidade = $_POST['especialidade'];
    $Crm = $_POST['crm'];

    $Medico = new Medico();
    $Medico->setNOME($Nome);
    $Medico->setESPECIALIDADE($Especialidade);
    $Medico->setCRM($Crm);

    $MedicoDAO->create($Medico);

    // Redireciona para a mesma página usando o método GET para evitar duplicação de submissão
    header("Location: medico.php?success=1");
    exit;
}

$Medicos = $MedicoDAO->read();
?>