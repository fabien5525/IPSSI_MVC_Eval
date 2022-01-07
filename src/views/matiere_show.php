<?php
//TODO info matiere, form pour la modif, btn permettant de la suprimer
if ($matiere->rowCount() > 0) {
    $matiere = $matiere->fetch();
    echo "<h3 class='text-center mb-3'> " . $matiere['nom'] . " </h3>";
?>
    <div class="container mb-3">
        <h4>Modifier</h4>
        <form action="/?page=matiereModif" method="POST">
            <input type="hidden" name="id" value="<?= $matiere['id'] ?>">
            <label for="nom-id" class="control-label">Nom</label>
            <input type="text" name="nom" id="nom-id">
            <input type="submit" value="Modifier" class="btn btn-primary">
            <a href="/?page=matiereSuppr&id=<?= $matiere['id'] ?>" class="btn btn-danger">Supprimer</a>
        </form>
    </div>

<?php
} else {
    echo '<p class="alert alert-danger">La matière n\'éxiste pas</p>';
}
?>