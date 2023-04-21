<?php
header("Content-type: application/json; charset=utf-8");
require '../functions.php';

$pdo->prepare('SELECT * ,  FROM produits  ');
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produits);
?>