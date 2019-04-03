<?php
include 'model/Connection.php';
include 'model/Servico.php';
try {
    $conn = Connection::open('database');
    Servico::setConnection($conn);
    $s = new Servico;
    $servicos = $s->all('');
} catch (Exception $e) {
    echo $e->getMessage();
}

foreach ($servicos as $serv) {
    echo $serv->titulo;
}
