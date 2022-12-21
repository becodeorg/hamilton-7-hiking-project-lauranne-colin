<?php
try {
    $conn = new PDO("mysql:host=188.166.24.55;dbname=hamilton-7-hiking-laco", 'hiking-laco', 'KqQxVnN4epZUWezV');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>