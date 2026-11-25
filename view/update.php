<?php
ob_start();
?>
<form action="../controller/add.php" method="post">
    <div class="mb-3">
        <input type="text" name="libelle" placeholder="libelle du produit" class="form-control" value="<?= $produit[1] ?>">
    </div>
    <div class="mb-3">
        <input type="text" name="prix" placeholder="prix du produit" class="form-control" value="<?= $produit[2] ?>">
    </div>
    <div class="mb-3">
        <input type="text" name="image" placeholder="https://picsum.photos/" class="form-control" value="<?= $produit[3] ?>">
    </div>
    <div class="mb-3">
        Date d'ajout : 
        <input type="date" name="date_ajout" class="form-control" value="<?= $produit[4] ?>">
    </div>
    <div class="mb-3">
        <input type="submit" name="ok" value="update" class="btn btn-primary">
    </div>
</form>
<?php
    $titre = "update produits";
    $contenu = ob_get_clean();
    include "layout.php";