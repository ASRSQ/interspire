<?php
$host = 'interspire_db';
$user = 'root';
$pass = 'root';  // Use a senha correta
$dbname = 'interspire_db';

$mysqli = new mysqli($host, $user, $pass, $dbname, 3306, null, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

if ($mysqli->connect_errno) {
    die("Erro de conexão ({$mysqli->connect_errno}): {$mysqli->connect_error}");
}

echo "Conexão bem-sucedida!";
?>
