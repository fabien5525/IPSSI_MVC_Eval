<?php
class NoteController
{
    public function list()
    {
        $manager = new NoteManager();
        $notes = $manager->findAll();

        $vars = compact('notes');
        DefaultController::render('note_list', $vars);
    }

    public function add(float $n, int $id_matiere)
    {
        $model = new NoteManager();
        $note = $model->add($n, $id_matiere);

        $vars = compact('note');
        DefaultController::render('note_ajout', $vars);
    }
}
