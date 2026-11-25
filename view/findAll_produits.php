    <?php
    //remplir le tampon 
    ob_start();
    ?>
    <div class="text-end">
    <a href="../controller/add.php" class="mt-3 btn btn-primary">Ajouter un nouveau produit</a>
    </div>
    <table class="table">
        <tr class="table-active">
            <th>Identifiant</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Date d'ajout</th>
            <th colspan="3">Action</th>
        </tr>
        <?php
        foreach ($LesProduits as $produit) {
        ?>
            <tr>
                <td><?= $produit[0] ?></td>
                <td><?= $produit[1] ?></td>
                <td><?= $produit[2] ?></td>
                <td><?= $produit[4] ?></td>
                <td><a href="../controller/detail.php?id=<?= $produit[0] ?>">voir detail.....</a></td>
                <td><a href="../controller/delete.php?id=<?= $produit[0] ?>">supprimer</a></td>
                <td><a href="../controller/update.php?id=<?= $produit[0] ?>">editer</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
    <?php
    $titre = "liste des produits";
    $contenu = ob_get_clean();
    include "layout.php";