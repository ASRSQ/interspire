<?php
$host = '172.18.0.3';
$user = 'root';
$pass = 'root';  // Se você definiu uma senha, insira aqui
$dbname = 'interspire_db';

$mysqli = new mysqli($host, $user, $pass, $dbname);

if ($mysqli->connect_errno) {
    die("Erro de conexão ({$mysqli->connect_errno}): {$mysqli->connect_error}");
}

echo "Conexão bem-sucedida!";
?>
