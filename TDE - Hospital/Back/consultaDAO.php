<?php
class ConsultaDAO{
    public function create (Consulta $Consulta) {
        $sql = 'INSERT INTO Consulta (Paciente, Medico, Data) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Consulta->getPACIENTE());
        $stmt->bindValue(2, $Consulta->getMEDICO());
        $stmt->bindValue(3, $Consulta->getDATA());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Consulta';

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
        $sql = 'UPDATE Consulta SET Paciente = ?, Medico = ?, Data = ?  WHERE ConsultaID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Consulta->getPACIENTE());
        $stmt->bindValue(2, $Consulta->getMEDICO());
        $stmt->bindValue(3, $Consulta->getDATA());
        

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
