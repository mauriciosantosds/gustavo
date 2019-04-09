<?php
class Servico {
    private static $conn;

    public static function setConnection( PDO $conn ) {
        self::$conn = $conn;
    }

    public function find($id, $class = 'stdClass') {
        $sth = self::$conn->prepare("SELECT * FROM servico where id = ?");
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        
        return $sth->fetchObject($class);
    }

    public function all($filter, $class = 'stdClass') {
        $sql = "SELECT * FROM servico ORDER BY id ASC ";
        if ($filter) {
            $sql .= "WHERE $filter";
        }
        //print "$sql <br>\n";
        $sth = self::$conn->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function resume($filter, $class = 'stdClass') {
        $sql = "SELECT id, imgcapa, titulo, SUBSTRING(conteudo, 1, 100) as conteudo FROM servico ORDER BY id DESC  ";
        if ($filter) {
            $sql .= "WHERE $filter";
        }
        //print "$sql <br>\n";
        $sth = self::$conn->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function delete($id) {
        $sql = "DELETE FROM cliente where id = ?";
        $sth = self::$conn->prepare($sql);
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        return $sth->execute();
    }

    public function save($data) {
        if (empty($data->id)) { 
            $sql = "INSERT INTO cliente (nome, sobrenome, empresa, cnpj, cpf, email, telefone1, telefone2) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $sth = self::$conn->prepare($sql);
            $sth->bindParam(1, $data->nome); 
            $sth->bindParam(2, $data->sobrenome); 
            $sth->bindParam(3, $data->empresa); 
            $sth->bindParam(4, $data->cnpj);  
            $sth->bindParam(5, $data->cpf);  
            $sth->bindParam(6, $data->email); 
            $sth->bindParam(7, $data->telefone1); 
            $sth->bindParam(8, $data->telefone2);
        } else {
            $sql = "UPDATE cliente SET nome = ?, sobrenome = ?, empresa = ?, cnpj = ?, cpf = ?, email = ?, telefone1 = ?, telefone2 = ? WHERE id = ?";
            $sth = self::$conn->prepare($sql);
            $sth->bindParam(1, $data->nome); 
            $sth->bindParam(2, $data->sobrenome); 
            $sth->bindParam(3, $data->empresa); 
            $sth->bindParam(4, $data->cnpj); 
            $sth->bindParam(5, $data->cpf); 
            $sth->bindParam(6, $data->email); 
            $sth->bindParam(7, $data->telefone1); 
            $sth->bindParam(8, $data->telefone2); 
            $sth->bindParam(9, $data->id, PDO::PARAM_INT); 
        }
        return $sth->execute(); // executa instrucao SQL
    }
}