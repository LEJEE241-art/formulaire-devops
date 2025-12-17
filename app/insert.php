<?php

require 'config.php';


$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$tel = trim($_POST['telephone'] ?? '');


if(strlen($nom) < 3 || !filter_var($email,FILTER_VALIDATE_EMAIL)){
echo json_encode(['status'=>'error','message'=>'Données invalides']); exit;
}


$stmt = $pdo->prepare("INSERT INTO utilisateurs (nom,email,telephone) VALUES (?,?,?)");
$stmt->execute([$nom,$email,$tel]);


echo json_encode(['status'=>'success','message'=>'Enregistrement réussi']);