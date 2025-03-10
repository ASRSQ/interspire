<?php
$host = 'interspire_db';
$user = 'root';
$pass = '';  // Se você definiu uma senha, insira aqui
$dbname = 'interspire_db';

$mysqli = new mysqli($host, $user, $pass, $dbname);

if ($mysqli->connect_errno) {
    die("Erro de conexão ({$mysqli->connect_errno}): {$mysqli->connect_error}");
}

echo "Conexão bem-sucedida!";
?>
