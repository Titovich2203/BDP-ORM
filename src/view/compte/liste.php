<br>
<h1 class="display-4" style="margin-left:15px">LISTE DES COMPTES</h1>
<a href="/mesprojets/BDP-ORM/View/NewCompte"><button type="button" class="btn btn-outline-primary float-right newBtn" style="margin-top: -60px; margin-right: 15px">NOUVEAU COMPTE</button></a>
<br>
<div class="content" id="ajax-content">
    <table class="table table-striped table-responsive-md btn-table">

    <thead>
    <tr>
        <th>#</th>
        <th>NUMERO</th>
        <th>DATE CREATION</th>
        <th>SOLDE</th>
        <th>NOM CLIENT</th>
        <th>ACTIONS</th>
    </tr>
    </thead>

    <tbody>
    <?php
    $i = 0;
      foreach ($data as $key => $c) { 
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
    ?>
    </tbody>

    </table>
</div>