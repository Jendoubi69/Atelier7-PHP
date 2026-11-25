<?php
ob_start();
?>
<div class="row">
    <div class="col-6">
        <img src="<?= $produit[3] ?>" alt="">
    </div>
    <div class="col-6">
        <h3><?= $produit[1] ?> <?= $produit[2] ?> DT</h3>
        <p>date d' ajout dans le stock <?= $produit[4] ?> </p>
    </div>
</div>
<?php
$titre ="detail de produit";
$contenu = ob_get_clean();
include "layout.php";
