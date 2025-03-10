<?php
$mysqli = new mysqli("interspire_db", "root", "", "interspire_db");

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

echo "Conexão bem-sucedida!";
?>
