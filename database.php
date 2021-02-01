<?php

function connectDB()
{

    $db_host = "mysql-hackmywebsite.alwaysdata.net";
    $db_user = "225561";
    $db_password = "mdp-groupe12";
    $db_name = "hackmywebsite_bdd";

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        echo "Connected successfully";
    } catch (PDOException $e) {
        return $conn;
        echo "Connection failed: " . $e->getMessage();
    }
}

function getAdmin($username, $password)
{
    try {
        $conn = connectDB();
        $q = $conn->query("SELECT username, password FROM user WHERE username = '".$username."' AND password = '".$password."' LIMIT 1;");
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $conn = null;
        $result = $q->fetch(); 
        return $result;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

?>
