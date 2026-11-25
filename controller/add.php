<?php
// appel au modèle
require_once "../model/crud_produits.php";
$crud = new crud_produits();
if (isset($_POST['ok'])){
    $p= new produits();
    $lib=htmlspecialchars($_POST['libelle']);
    $prix=htmlspecialchars($_POST['prix']);
    $image=htmlspecialchars($_POST['image']);
    $date=htmlspecialchars($_POST['date_ajout']);
    $p->setLibelle($lib);
    $p->setPrix($prix);
    $p->setImage($image);
    $p->setDate_ajout($date);
    $res = $crud->add($p);
    if ($res){
        header('location:../controller/findALL_produits.php');
    exit;
}
}
//affichage formulaire 
include '../view/add.php';
exit;