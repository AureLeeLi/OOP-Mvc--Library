<?php
//connexion à la base de données
$dsn = 'mysql:dbname=bookphp;host=localhost';
//Data Source Name, ou DSN, qui contient les informations requises pour se connecter à la base.
$user = 'root';
$password = '';

$db = new PDO($dsn, $user, $password);
?>