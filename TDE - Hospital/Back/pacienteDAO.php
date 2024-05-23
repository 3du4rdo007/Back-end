<?php
class PacienteDAO{
    public function create (Paciente $Paciente) {
        $sql = 'INSERT INTO Paciente (Nome, Idade, Genero) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Paciente->getNOME());
        $stmt->bindValue(2, $Paciente->getIDADE());
        $stmt->bindValue(3, $Paciente->getGENERO());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Paciente';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Paciente $paciente) {
        $sql = 'UPDATE paciente SET Nome = ?, Idade = ?, Genero = ?  WHERE pacienteID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $Paciente->getNOME());
        $stmt->bindValue(2, $Paciente->getIDADE());
        $stmt->bindValue(3, $Paciente->getGENERO());
        

        $stmt->execute();
    }

    public function delete($PacienteID) {
        $sql = 'DELETE FROM Paciente WHERE PacienteID = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $PacienteID);

        $stmt->execute();
    }
}
?>  
