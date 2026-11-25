<?php
// appel au modèle
require_once "../model/crud_produits.php";
$crud = new crud_produits();
$id=$_GET["id"];
$res = $crud->delete($id);
if ($res){
    header('location:../controller/findALL_produits.php');
    exit;
}
