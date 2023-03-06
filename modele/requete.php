<?php


/*************************CONNEXION A LA BDD*************************************** */
function connexion(){
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $host = '127.0.0.1';
    $db   = 'portefolio';
    $user = 'root';
    $pass = 'Azerty123$';
    $dsn = "mysql:host=$host;dbname=$db";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } 
    catch (\PDOException $e) {
        print"ERREUR:".$e;
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    return $pdo;
}
/*************************FIN******************************************** */

/************************EXECUTION DE LA REQUETE********************** 
*/
$pdo=connexion();
function userexist($pdo){
    $stmt = $pdo->prepare("
        SELECT id_user,login FROM utilisateur WHERE login= ? and mdp= ? ");
    $stmt->execute(array($_POST['user'], $_POST['password']));
return $stmt;
}
