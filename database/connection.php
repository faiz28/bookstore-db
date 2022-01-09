<?php
function connect_db()
{
    $host = "ec2-54-196-105-177.compute-1.amazonaws.com";
    $username = "hslrlryvwddmtp";
    $password = "2c1607fb8215ebfaf00cc3d7b88b6f53031586b99a341729fd575f771ccf67e8";
    $dbname = "d55qs3nc85dpum";
    $port = ""

    try {
        $dsn = "pgsql:host=$host.";port=".$port.";dbname=".$dbname.";user=".$username.";password=".$password.";";
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
