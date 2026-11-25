<?php
require_once "../config.php";
include "produits.php";
class crud_produits
{
    private $pdo;
    function __construct()
    {
        $obj = new config();
        $this->pdo = $obj->getConnexion(); // objet de la classe PDO
    }

    public function findAll()
    {  // 2 Formuler la requete
        $sql = "select * from produits";
        //3 envoi de la requete
        $res = $this->pdo->query($sql);
        $LesProduits = $res->fetchAll(PDO::FETCH_NUM);
        return $LesProduits;
    }
    function find($id) {
        $sql = "select * from produits where id =".$id;
        //3 envoi de la requete
        $res = $this->pdo->query($sql); // le type de $res est PDOStatement
        return $res->fetch(PDO::FETCH_NUM);
    }
    function delete($id) {
        $sql = "delete from produits where id =".$id;
        return $this->pdo->exec($sql); 
    }
    function add(produits $p) {
        $sql="insert into produits values(NULL,'{$p->getLibelle()}',{$p->getPrix()},'{$p->getImage()}','{$p->getDate_ajout()}');";
        return $this->pdo->exec($sql); 
    }
    function update(produits $p,$id) {
        $sql="UPDATE `produits` SET `libelle`='{$p->getLibelle()}',`prix`={$p->getPrix()},`image`='{$p->getImage()}',`date_ajout`='{$p->getDate_ajout()}' WHERE id={$id};";
        return $this->pdo->exec($sql); 
    }
    
}
