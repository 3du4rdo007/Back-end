<?php
include('processa_medico.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Médicos</title>
    <link rel="stylesheet" href="/TDE - Hospital/front/style.css">
</head>
<body>
    <h1>Gerenciar Médicos</h1>
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <p>Médico adicionado com sucesso!</p>
    <?php endif; ?>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="especialidade">Especialidade:</label>
        <input type="text" id="especialidade" name="especialidade" required>
        <br>
        <label for="crm">CRM:</label>
        <input type="text" id="crm" name="crm" required>
        <br>
        <input type="submit" value="Adicionar Médico">
    </form>

    <h2>Lista de Médicos</h2>
    <?php if (!empty($Medicos)): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Especialidade</th>
                <th>CRM</th>
            </tr>
            <?php foreach ($Medicos as $Medico): ?>
                <tr>
                    <td><?php echo isset($Medico['medicoid']) ? $Medico['medicoid'] : 'N/A'; ?></td>
                    <td><?php echo isset($Medico['nome']) ? $Medico['nome'] : 'N/A'; ?></td>
                    <td><?php echo isset($Medico['especialidade']) ? $Medico['especialidade'] : 'N/A'; ?></td>
                    <td><?php echo isset($Medico['crm']) ? $Medico['crm'] : 'N/A'; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum médico encontrado.</p>
    <?php endif; ?>

    <br>
    <a href="/TDE - Hospital/front/limpar_medicos.php">Limpar Todos os Médicos</a>
    <br>
    <a href="../index.php">Voltar</a>
</body>
</html>