<?php
include('C:\localhost\TDE - Hospital\conexao.php');

try {
    $sql = 'DELETE FROM Consulta';
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
    <title>Limpar Consultas</title>
</head>
<body>
    <br>
    <a href="/TDE - Hospital/front/consulta.php">Voltar para Gerenciamento de Consultas</a>
</body>
</html>
