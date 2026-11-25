<?php
ob_start();
?>
<form action="../controller/add.php" method="post">
    <div class="mb-3">
        <input type="text" name="libelle" placeholder="libelle du produit" class="form-control">
    </div>
    <div class="mb-3">
        <input type="text" name="prix" placeholder="prix du produit" class="form-control">
    </div>
    <div class="mb-3">
        <input type="text" name="image" placeholder="https://picsum.photos/" class="form-control">
    </div>
    <div class="mb-3">
        Date d'ajout : 
        <input type="date" name="date_ajout" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" name="ok" value="Ajouter" class="btn btn-primary">
    </div>
</form>
<?php
$titre ="Ajout un produit";
$contenu = ob_get_clean();
include "layout.php";
