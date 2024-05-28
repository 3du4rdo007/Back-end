<?php
include('C:\localhost\TDE - Hospital\conexao.php');

try {
    $sql = 'DELETE FROM Medico';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->execute();

    echo "Todos os registros foram apagados com sucesso.";
} catch (Exception $e) {
    echo "Erro ao apagar os registros: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Limpar Médicos</title>
</head>
<body>
    <br>
    <a href="/TDE - Hospital/front/medico.php">Voltar para Gerenciamento de Médicos</a>
</body>
</html>
