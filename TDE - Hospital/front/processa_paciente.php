<?php
include('C:\localhost\TDE - Hospital\conexao.php');
include('C:\localhost\TDE - Hospital\Back\paciente.php');
include('C:\localhost\TDE - Hospital\Back\pacienteDAO.php');

$PacienteDAO = new PacienteDAO();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nome = $_POST['nome'];
    $Idade = $_POST['idade'];
    $Genero = $_POST['genero'];

    $Paciente = new Paciente();
    $Paciente->setNOME($Nome);
    $Paciente->setIDADE($Idade);
    $Paciente->setGENERO($Genero);

    $PacienteDAO->create($Paciente);

    // evitar ficar em loop de cadastro
    header("Location: paciente.php?success=1");
    exit;
}

$Pacientes = $PacienteDAO->read();
?>