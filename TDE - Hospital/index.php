<?php
require_once 'Conexao.php';
require_once 'Paciente.php';
require_once 'Medico.php';
require_once 'Consulta.php';
require_once 'ConsultaDAO.php';

// Função para salvar Paciente no banco de dados
function savePaciente($paciente) {
    $sql = 'INSERT INTO Paciente (Nome, Idade, Genero) VALUES (?, ?, ?)';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->execute([$paciente->getNome(), $paciente->getIdade(), $paciente->getGenero()]);
    $pacienteId = Conexao::getConn()->lastInsertId();
    $paciente->setId($pacienteId); // Atribuir o ID gerado ao objeto
}

// Função para salvar Medico no banco de dados
function saveMedico($medico) {
    $sql = 'INSERT INTO Medico (Nome, Especialidade, CRM) VALUES (?, ?, ?)';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->execute([$medico->getNome(), $medico->getEspecialidade(), $medico->getCrm()]);
    $medicoId = Conexao::getConn()->lastInsertId();
    $medico->setId($medicoId); // Atribuir o ID gerado ao objeto
}

// Criando e configurando instâncias de Paciente e Medico
$paciente = new Paciente();
$paciente->setNome("João da Silva");
$paciente->setIdade(45);
$paciente->setGenero("Masculino");

$medico = new Medico();
$medico->setNome("Dra. Maria Oliveira");
$medico->setEspecialidade("Cardiologia");
$medico->setCrm("12345");

// Salvando os pacientes e médicos no banco de dados
savePaciente($paciente);
saveMedico($medico);

// Criando e configurando uma instância de Consulta
$consulta = new Consulta();
$consulta->setPaciente($paciente);
$consulta->setMedico($medico);
$consulta->setData("2024-06-15 10:30");

// Salvando a consulta no banco de dados
$consultaDAO = new ConsultaDAO();
$consultaDAO->create($consulta);

// Imprimindo os detalhes da consulta
$consulta->imprimirDetalhes();
?>
