<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);   
require ("../modele/requete.php");
$pdo=connexion();
$stmt=userexist($pdo);

$data = $stmt->fetchall();
if (count($data) == 1) {//vérifie si l'utilisateur existe dans la base de donnée 
    session_start();
    $row = $data[0];
    $_SESSION['user'] = $row['user'];
    $_SESSION['id'] = $row['id'];
 header('Location: ../vue/page_acceuil.php');

}else {
    header('location: ../vue/page_connexion.php');
 }