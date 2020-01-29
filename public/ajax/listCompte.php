<?php
  require_once "../../bootstrapLib.php";

    $sql = "SELECT c FROM compte c";
    $comptes = $entityManager->createQuery($sql)->getResult();
    $i = 0;
      foreach ($comptes as $key => $c) { 
        if($c->getClient()->getId() == $_GET['idCl']){
        $i++;
        ?>
        <tr>
        <th scope="row"><?= $i ?></th>
        <td><?= $c->getNumero() ?></td>
        <td><?= $c->getDateCreation() ?></td>
        <td><?= $c->getSolde() ?></td>
        <td><?= $c->getClient()->getNom() ?> <?= $c->getClient()->getPrenom() ?></td>
        <td>
        <button class="btn btn-danger delCompte" idS="<?= $c->getId() ?>" > SUPPRIMER </button>
        </td>
    </tr>
      <?php }
    } ?>

      
<script src="public/js/scriptCompte.js"></script>