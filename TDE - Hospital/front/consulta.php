<?php
include('processa_consulta.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Consultas</title>
    <link rel="stylesheet" href="/TDE - Hospital/front/style.css">
</head>
<body>
    <h1>Gerenciar Consultas</h1>
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <p>Consulta adicionada com sucesso!</p>
    <?php endif; ?>
    <form method="post" action="processa_consulta.php">
        <label for="paciente">Paciente:</label>
        <select id="paciente" name="paciente" required>
            <option value="">Selecione um paciente</option>
            <?php foreach ($Pacientes as $Paciente): ?>
                <option value="<?php echo $Paciente['pacienteid']; ?>"><?php echo $Paciente['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="medico">Médico:</label>
        <select id="medico" name="medico" required>
            <option value="">Selecione um médico</option>
            <?php foreach ($Medicos as $Medico): ?>
                <option value="<?php echo $Medico['medicoid']; ?>"><?php echo $Medico['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="dataConsulta">Data da Consulta:</label>
        <input type="date" id="dataConsulta" name="dataConsulta" required>
        <br>
        <input type="submit" value="Adicionar Consulta">
    </form>

    <h2>Lista de Consultas</h2>
    <?php if (!empty($Consultas)): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Data da Consulta</th>
            </tr>
            <?php foreach ($Consultas as $Consulta): ?>
                <tr>
                    <td><?php echo isset($Consulta['consultaid']) ? $Consulta['consultaid'] : 'N/A'; ?></td>
                    <td><?php echo isset($Consulta['pacientenome']) ? $Consulta['pacientenome'] : 'N/A'; ?></td>
                    <td><?php echo isset($Consulta['mediconome']) ? $Consulta['mediconome'] : 'N/A'; ?></td>
                    <td><?php echo isset($Consulta['dataconsulta']) ? $Consulta['dataconsulta'] : 'N/A'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhuma consulta encontrada.</p>
    <?php endif; ?>

    <br>
    <a href="/TDE - Hospital/front/limpar_consulta.php">Limpar Todas as Consultas</a>
    <br>
    <a href="../index.php">Voltar</a>
</body>
</html>