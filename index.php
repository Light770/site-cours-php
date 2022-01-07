<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Mon site en local</title>
  <meta name="description" content="Mon site en local">
  <meta name="author" content="Alexandre Delaistre">

  <meta property="og:title" content="Mon super site en local">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://urldemonsite.com">
  <meta property="og:description" content="Ce site est mon premier, soyez indulgent !">
  <!--meta property="og:image" content="image.png"-->

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <?php 
        include './src/devtool/debug.devtool.php';
        include './config/main.config.php';
        include './src/core.php';
        include './src/databse.php';
    ?>
    <nav class="nav-bar">
        <ul>
            <li><a href="#"><div class="list-element">Mon super site</div></a>
            </li>
        </ul>
    </nav>
    <div class="content-block">
        <nav class="side-menu">
            <ul>
            <?php 
            
                    $menu_side = [
                        [
                            "name" => "Accueil",
                            "href" => "home"
                        ],
                        [
                            "name" => "Me contacter",
                            "href" => "contact"
                        ],
                        [
                            "name" => "Me Féliciter d'avoir ajouter une page",
                            "href" => "pshartek"
                        ],
                        [
                            "name" => "Ajouter une Experience",
                            "href" => "ajouterExperiences"
                        ],
                    ];


                    foreach ($menu_side as $key => $value) {
                        echo retournerMenuButton($value,$config['passwordHttp']);
                    }

                ?>

            </ul>
        </nav>
        <div class="content">
        <?php 
            if(isset($_GET['password'])){
                $password = $_GET['password'];
            } else {
                $password = 'badpass';
            }
            if($password == $config['passwordHttp']) {
                include './src/includes/login.inc.php';
            } else {
                include './src/includes/oops.inc.php';
            }
        ?> 
        
        </div>
    </div>
    <script src="js/scripts.js"></script> 
</body>
</html>