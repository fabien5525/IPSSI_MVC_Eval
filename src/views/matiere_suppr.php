<?php

if ($matiere->rowCount() > 0) {
    echo '<p class="">La suppréssion de la matière à bien été effectué</p>';
} else {
    echo '<p class="alert alert-danger">La suppréssion à connu un problème</p>';
}
