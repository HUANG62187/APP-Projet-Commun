<?php
try {
    $privatePDO = new PDO('mysql:host=localhost;dbname=volpe_private;charset=utf8mb4', 'root', '');
    $privatePDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur BDD : " . $e->getMessage());
}
