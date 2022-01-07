<?php

class NoteManager extends Note
{
    public function findAll()
    {
        $bdd = new BDD();
        $co = $bdd->getConnexion();

        $note = $co->prepare('SELECT * FROM note');
        $note->execute();

        return $note;
    }

    public function add(float $n, int $id_matiere)
    {
        $bdd = new BDD();
        $co = $bdd->getConnexion();

        $note = $co->prepare('INSERT INTO note(note, id_matiere) VALUES (:note, :idM)');
        $note->execute(
            [
                'note' => $n,
                'idM' => $id_matiere
            ]
        );

        return $note;
    }
}
