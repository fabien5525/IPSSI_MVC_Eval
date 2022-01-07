<?php

if ($matiere->rowCount() > 0) {
    echo '<p class="">L\'ajout de la matière à bien été effectué</p>';
} else {
    echo '<p class="alert alert-danger">L\'ajout de la matière à connu un problème</p>';
}
