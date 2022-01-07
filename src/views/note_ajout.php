<?php

if ($note->rowCount() > 0) {
    echo '<p class="">L\'ajout de la note à bien été effectué</p>';
} else {
    echo '<p class="alert alert-danger">L\'ajout de la note à connu un problème</p>';
}
