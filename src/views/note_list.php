<?php
$mm = new MatiereManager();
$matieres = $mm->findAll();
$sum = 0.0;
$nbN = 0;
?>

<div class="container mb-3">
    <h4 class="text-center">Nouvelle Note</h4>
    <form method="post" action="/?page=noteAjout">
        <div class="form-group">
            <label for="note-id">Note</label>
            <input min="0" max="20" value="0" class="form-control" type="number" name="note" id="note-id" step="0.01">
            <label for="matiere-id">Matière</label>
            <select class="form-control" name="matiere" id="matiere-id">
                <?php
                if ($matieres->rowCount() > 0) {
                    $matieres = $matieres->fetchAll(PDO::FETCH_CLASS, 'Matiere');
                    foreach ($matieres as $m) { ?>
                        <option value="<?= $m->getId(); ?>" name="matiere"><?= $m->getNom(); ?></option>
                <?php }
                } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
<?php
if ($notes->rowCount() > 0) {
    $notes = $notes->fetchAll(PDO::FETCH_CLASS, 'Note');
?>
    <table class="table container mb-3">
        <thead>
            <tr>
                <th scope="col">Matière</th>
                <th scope="col">Note</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $n) { ?>
                <tr>
                    <td>
                        <?php
                        $nbN++;
                        $sum += ((float) $n->getNote());
                        $matiere = $mm->findOneById($n->getId_matiere());
                        if ($matiere->rowCount() > 0) {
                            $matiere = $matiere->fetch();
                            echo $matiere['nom'];
                        } else {
                            echo "Erreur Matière";
                        }
                        ?>
                    </td>
                    <td><?= $n->getNote(); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="container mb-3">
        <p class="success">Votre Moyenne général est de <?= ($sum / $nbN) ?></p>
    </div>
<?php

} else {
    echo '<p class="alert alert-danger">Il n\'y a aucune Note</p>';
}
?>