<?php
class ConsultaDAO{
    public function create (Consulta $Consulta) {
        $sql = 'INSERT INTO Consulta (PacienteID, MedicoID, DataConsulta) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Consulta->getPACIENTE());
        $stmt->bindValue(2, $Consulta->getMEDICO());
        $stmt->bindValue(3, $Consulta->getDATACONSULTA());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT c.ConsultaID, p.Nome AS PacienteNome, m.Nome AS MedicoNome, c.DataConsulta 
        FROM Consulta c 
        JOIN Paciente p ON c.PacienteID = p.PacienteID 
        JOIN Medico m ON c.MedicoID = m.MedicoID';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Consulta $Consulta) {
        $sql = 'UPDATE Consulta SET PacienteID = ?, MedicoID = ?, DataConsulta = ?  WHERE ConsultaID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Consulta->getPACIENTE());
        $stmt->bindValue(2, $Consulta->getMEDICO());
        $stmt->bindValue(3, $Consulta->getDATACONSULTA());
        

        $stmt->execute();
    }

    public function delete($ConsultaID) {
        $sql = 'DELETE FROM Consulta WHERE ConsultaID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ConsultaID);

        $stmt->execute();
    }
}
?>  
