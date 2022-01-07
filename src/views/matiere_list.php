<div class="container mb-3">
	<h4 class="text-center">Nouvelle matière</h4>
	<form method="post" action="/?page=matiereAjout">
		<div class="form-group">
			<label for="nom-id">Nom</label>
			<input class="form-control" type="text" name="nom" id="nom-id">
		</div>
		<button type="submit" class="btn btn-primary">Envoyer</button>
	</form>
</div>
<?php
if ($matieres->rowCount() > 0) {
	$matieres = $matieres->fetchAll(PDO::FETCH_CLASS, 'Matiere');
?>
	<table class="table container mb-3">
		<thead>
			<tr>
				<th scope="col">Matière</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($matieres as $m) { ?>
				<tr>
					<td><?= $m->getNom(); ?></td>
					<td><a class="btn btn-outline-primary" href="/?page=matiere&matiere=<?= $m->getId(); ?>">Afficher</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php

} else {
	echo '<p class="alert alert-danger">Il n\'y a aucune matière</p>';
}
?>