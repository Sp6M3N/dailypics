<?php
try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=wallframes', 'root', '');
    return $db;
} catch (PDOException $e) {
    return "Error!: " . $e->getMessage();
    die();
}
?>
