<?php
function connect_db()
{
    $host = "sql6.freesqldatabase.com";
    $username = "sql6465178";
    $password = "wcR7mzwN5k";
    $dbname = "sql6465178";
    try {
        $dsn ="mysql:host=$host;dbname=$dbname";
        $conn = new PDO($dsn, $username, $password);
        return $conn;
        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
