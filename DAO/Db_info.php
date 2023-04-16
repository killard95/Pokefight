<?php
// Informations pour se connecter à la base de données
function connectToDB() {
    $host = "mysql8PF" ;
    $user = "killard" ;
    $password = "killard95" ;
    $db = "Pokefight" ;
    // Connection à la base de données avec gestion des erreurs
    try {
        $dbPF = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $dbPF->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully to DataBase <br>";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    return $dbPF ;
}