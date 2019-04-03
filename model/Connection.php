<?php
final class Connection {
    private function __construct() {}

    public static function open($name) {
        //verifica se existe arquivo de configuração para este banco de dados
        if(file_exists("config/{$name}.ini")) {
            $db = parse_ini_file("config/{$name}.ini");
        } 
        else {
            throw new Exception("Arquivo '$name' não encontrado");
        }

        //lê as informações contidas no arquivo
        $user = isset($db['user']) ? $db['user'] : NULL;
        $pass = isset($db['pass']) ? $db['pass'] : NULL;
        $name = isset($db['name']) ? $db['name'] : NULL;
        $host = isset($db['host']) ? $db['host'] : NULL;
        $type = isset($db['type']) ? $db['type'] : NULL;
        $port = isset($db['port']) ? $db['port'] : NULL;

        //descobre qual o tipo (driver) de banco de dados a ser utilizado
        switch ($type) {
            
            case 'mysql':
                $port = $port ? $port : '3306';
                //verificar url de conexão
                $conn = new PDO("mysql:host={$host};port={$port};dbname={$name};charset=utf8",
                $user,$pass);
                
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                break;
            case 'sqlite':
                $conn = new PDO("sqlite:{$name}");
                break;
        }
        //define para que o pdo lance exceções na ocorrência de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}