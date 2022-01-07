<?php

class MatiereManager extends Matiere
{
	public function findAll()
	{
		$bdd = new BDD();
		$co = $bdd->getConnexion();

		$matiere = $co->prepare('SELECT * FROM matiere');
		$matiere->execute();

		return $matiere;
	}

	public function findOneById($id)
	{
		$bdd = new BDD();
		$co = $bdd->getConnexion();

		$matiere = $co->prepare('SELECT * FROM matiere WHERE id = :id');
		$matiere->execute(['id' => $id]);

		return $matiere;
	}

	public function add($nom)
	{
		$bdd = new BDD();
		$co = $bdd->getConnexion();

		$matiere = $co->prepare('INSERT INTO matiere(nom) VALUES (:nom)');
		$matiere->execute(['nom' => $nom]);

		return $matiere;
	}

	public function update(int $id, String $nom)
	{
		$bdd = new BDD();
		$co = $bdd->getConnexion();

		$matiere = $co->prepare('UPDATE matiere SET nom = :nom WHERE id = :id');
		$matiere->execute([
			'id' => $id,
			'nom' => $nom
		]);

		return $matiere;
	}

	public function delete($id)
	{
		$bdd = new BDD();
		$co = $bdd->getConnexion();

		$matiere = $co->prepare('DELETE FROM matiere WHERE id = :id');
		$matiere->execute(['id' => $id]);

		return $matiere;
	}
}
