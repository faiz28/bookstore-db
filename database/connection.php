<?php
function connect_db()
{
    $host = "ec2-18-204-170-75.compute-1.amazonaws.com";
    $username = "brxkrfljnfasgs";
    $password = "f48864252b8dbdfd9c1cb5db0b70db05f5bda709517920865ccaaef393d0001f";
    $dbname = "d65duhs36gng5m";
    $port = "80"

    try {
        $dsn ="psql:host=$host;dbname=$dbname";
        $conn = new PDO($dsn, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $conn;
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
