<?php 
if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = '';
}

// Ternaire 
// $page = isset($_GET['page']) ? $_GET['page'] : 'defo'; 

//Ceci est un Routeur (tres simplifié) 
switch ($page) {
    case 'home':
        include './src/includes/accueil.inc.php';
        break;
    case 'contact':
        include './src/includes/contact.inc.php';
        break;
    case 'pshartek':
        include './src/includes/merci.inc.php';
        break;
    case 'ajouterExperiences':
        include './src/includes/ajouterExperiences.inc.php';
        break;
    default:
        include './src/includes/accueil.inc.php';
        break;
}