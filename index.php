<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

	<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark text-decoration-none fs-3" href="/">Accueil</a>
			<a class="p-2 text-dark text-decoration-none fs-5" href="/?page=matieres">Matières</a>
		</nav>
	</header>
	<?php

	require_once 'src/class/Autoload.php';

	Autoload::load();

	if (!isset($_GET['page'])) {
		$ctrl = new NoteController();
		$ctrl->list();
	} else {
		switch ($_GET['page']) {
			case 'matieres':
				$ctrl = new MatiereController();
				$ctrl->list();
				break;
			case 'matiere':
				// Si j'ai reçu une marque dans l'URL
				if (isset($_GET['matiere'])) {
					$ctrl = new MatiereController();
					$ctrl->show($_GET['matiere']);
				} else {
					$ctrl = new DefaultController();
					$ctrl->get404();
				}
				break;
			case 'matiereAjout':
				if (isset($_POST['nom'])) {
					$ctrl = new MatiereController();
					$ctrl->add($_POST['nom']);
				} else {
					$ctrl = new DefaultController();
					$ctrl->get404();
				}
				break;
			case 'matiereModif':
				if (isset($_POST['nom']) && isset($_POST['id'])) {
					$ctrl = new MatiereController();
					$ctrl->update($_POST['id'], $_POST['nom']);
				} else {
					$ctrl = new DefaultController();
					$ctrl->get404();
				}
				break;
			case 'matiereSuppr':
				if (isset($_GET['id'])) {
					$ctrl = new MatiereController();
					$ctrl->delete($_GET['id']);
				} else {
					$ctrl = new DefaultController();
					$ctrl->get404();
				}
				break;
			case 'noteAjout':
				if (isset($_POST['note']) && isset($_POST['matiere'])) {
					$ctrl = new NoteController();
					$ctrl->add((float) $_POST['note'], (int) $_POST['matiere']);
				} else {
					$ctrl = new DefaultController();
					$ctrl->get404();
				}
				break;
			default:
				$ctrl = new DefaultController();
				$ctrl->get404();
				break;
		}
	}
	?>
</body>

</html>