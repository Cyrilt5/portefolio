<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);   
require ("../modele/requete.php");
$pdo=connexion();
if ($stmt=userexist($pdo)){
    $stmt=insert($pdo,$_POST['user'],$_POST['password']);
}else{
    
}
$stmt=userexist($pdo);

$data = $stmt->fetchall(); 
if (count($data) == 1) {//verifie si lutilisateur existe dans la base de donne
    session_start();
    $row = $data[0];
    $_SESSION['user'] = $row['user'];
    $_SESSION['password'] = $row['password'];
    
 header('Location: ../vue/page_acceuil.php');

}else {
    header('location: ../vue/page_connexion2.php');
 }
 