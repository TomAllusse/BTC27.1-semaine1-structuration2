<?php

$host = "mysql:host=localhost;dbname=todo;charset=utf8";
$user = "root";
$pwd = "";


try {
    $db = new PDO($host, $user, $pwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté !!!!!!!";
} catch (PDOException $e) {
    die('Erreur de connexion !');
}