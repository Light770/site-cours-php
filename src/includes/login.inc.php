<?php 

echo "You're logged in";

if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 'defo';
}

// Ternaire 
// $page = isset($_GET['page']) ? $_GET['page'] : 'defo'; 



switch ($page) {
    case 'home':
        include './src/includes/accueil.inc.php';
        break;
    case 'home':
        include './src/includes/accueil.inc.php';
        break;
    case 'profile':
        include './src/includes/profile.inc.php';
        break;
    default:
        include './src/includes/accueil.inc.php';
        break;
}

