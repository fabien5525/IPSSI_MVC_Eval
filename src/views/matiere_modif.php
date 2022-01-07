<?php

if ($matiere->rowCount() > 0) {
    echo '<p class="">La modification de la matière à bien été effectué</p>';
} else {
    echo '<p class="alert alert-danger">La modification à connu un problème</p>';
}
