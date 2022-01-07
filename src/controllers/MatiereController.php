<?php

class MatiereController
{
	public function list()
	{

		$manager = new MatiereManager();
		$matieres = $manager->findAll();

		$vars = compact('matieres');
		DefaultController::render('matiere_list', $vars);
	}

	public function show(int $id)
	{

		$model = new MatiereManager();
		$matiere = $model->findOneById($id);

		$vars = compact('matiere');
		DefaultController::render('matiere_show', $vars);
	}

	public function add(String $name)
	{
		$model = new MatiereManager();
		$matiere = $model->add($name);

		$vars = compact('matiere');
		DefaultController::render('matiere_ajout', $vars);
	}

	public function update(int $id, String $nom)
	{
		$model = new MatiereManager();
		$matiere = $model->update($id, $nom);

		$vars = compact('matiere');
		DefaultController::render('matiere_modif', $vars);
	}

	public function delete(int $id)
	{
		$model = new MatiereManager();
		$matiere = $model->delete($id);

		$vars = compact('matiere');
		DefaultController::render('matiere_suppr', $vars);
	}
}
