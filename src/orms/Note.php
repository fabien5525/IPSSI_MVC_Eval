<?php

class Note
{
    private $id;
    private $note;
    private $id_matiere;
    private $matiere;

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;
        return $this;
    }
    public function getNote(): string
    {
        return $this->note;
    }

    public function setId_matiere(int $id_matiere): self
    {
        $this->id_matiere = $id_matiere;
        return $this;
    }

    public function getId_matiere(): int
    {
        return $this->id_matiere;
    }
}
