<?php
include('processa_paciente.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Pacientes</title>
    <link rel="stylesheet" href="/TDE - Hospital/front/style.css">
</head>
<body>
    <h1>Gerenciar Pacientes</h1>
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <p>Paciente adicionado com sucesso!</p>
    <?php endif; ?>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br>
        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" required>
        <br>
        <input type="submit" value="Adicionar Paciente">
    </form>

    <h2>Lista de Pacientes</h2>
    <?php if (!empty($Pacientes)): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Gênero</th>
            </tr>
            <?php foreach ($Pacientes as $Paciente): ?>
                <tr>
                    <td><?php echo isset($Paciente['pacienteid']) ? $Paciente['pacienteid'] : 'N/A'; ?></td>
                    <td><?php echo isset($Paciente['nome']) ? $Paciente['nome'] : 'N/A'; ?></td>
                    <td><?php echo isset($Paciente['idade']) ? $Paciente['idade'] : 'N/A'; ?></td>
                    <td><?php echo isset($Paciente['genero']) ? $Paciente['genero'] : 'N/A'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum paciente encontrado.</p>
    <?php endif; ?>

    <br>
    <a href="/TDE - Hospital/front/limpar_pacientes.php">Limpar Todos os Pacientes</a>
    <br>
    <a href="../index.php">Voltar</a>
</body>
</html>