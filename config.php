<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'bdd_dv';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/*if ($conexao->connect_errno) {
    echo "erro no servidor";
} else {
    echo "concluido com sucesso";
}*/

?>
