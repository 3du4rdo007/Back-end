<?php
class MedicoDAO{
    public function create (Medico $Medico) {
        $sql = 'INSERT INTO Medico (Nome, Especialidade, CRM) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Medico->getNOME());
        $stmt->bindValue(2, $Medico->getESPECIALIDADE());
        $stmt->bindValue(3, $Medico->getCRM());

        $stmt->execute();
    }

    public function read() {
            $sql = 'SELECT * FROM Medico';
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();
    
            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                return [];
            }
        }
    
    
    

    public function update(Medico $Medico) {
        $sql = 'UPDATE Medico SET Nome = ?, Especialidade = ?, CRM = ?  WHERE MedicoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Medico->getNOME());
        $stmt->bindValue(2, $Medico->getESPECIALIDADE());
        $stmt->bindValue(3, $Medico->getCRM());
        

        $stmt->execute();
    }

    public function delete($MedicoID) {
        $sql = 'DELETE FROM Medico WHERE MedicoID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $MedicoID);

        $stmt->execute();
    }
}
?>  
