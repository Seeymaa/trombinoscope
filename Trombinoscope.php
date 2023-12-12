<?php
//Récupération des données
include 'database.php';  //Pour récupérer la variable $students
$page_title = 'Trombinoscope';

//Chargement de la vue
ob_start();
include 'app/view/trombi.view.php';
$content = ob_get_clean();

//Génération de la page HTML à partir du layout
include 'app/view/common/layout.php';
