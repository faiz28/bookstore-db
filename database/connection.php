<?php
function connect_db()
{
    $host = "localhost";
    $username = "faiz";
    $password = "Faiz@6761";
    $dbname = "bookstore-db";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $conn;
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}