<?php
require 'connexion.php';

    $pseudo = $_POST['pseudo'];
        
    //  Récupération de l'utilisateur et de son pass hashé
    $req = $db->prepare('SELECT id, password FROM users WHERE pseudo = :pseudo');
    $req->execute(array(
        'pseudo' => $pseudo));
    $resultat = $req->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

    if (!$resultat)
    {
        header( "refresh:3; url=index.php" );
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['pseudo'] = $pseudo;
            header( "refresh:3; url=upload/gallery.php" );
            ?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<title>Dailypics</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="test2.css">
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

  <!-- Navbar -->
        <nav class="navbar navbar-light bg-light d-flex justify-content-center">
        <h1 id="titre"  >D A I L Y P I C S</h1>
        </nav>
      
      
        <!-- Fin Navbar -->
      
        <div id="image-bg" class="container">
      
      
          <!-- Début Authentification -->
      
        <form action="login.php" method="post">
          <div id="cont" class="container">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x" style="color: white;"></i>
              <i class="fa fa-user fa-stack-1x" style="color: grey"></i>
            </span>
            <div>
              <h2>Vous êtes connecté</h2>
          </div>
        </form>
      
        </div>
        <!-- Fin Authentification -->
      
      
        <!-- Début Footer -->
        <footer class="page-footer font-small mdb-color lighten-3 pt-4">
      
          <div class="container">
            <div class="row">
            
              <!-- 1ère image -->
          
              <div class="col-lg-2 col-md-12 mb-4">
                <div class="view overlay z-depth-1-half">
                  <img src="https://i1.wp.com/hello-hello.fr/wp-content/uploads/2019/01/deco-nature-instamum-octobre-et-mai-sunday-1-.jpg?fit=768%2C575" class="imgfoot" alt="Deco">
                <div class="heart"></div>
                </div>
              </div>
            
              <!-- Deuxième image -->
              <div class="col-lg-2 col-md-6 mb-4">
                <div class="view overlay z-depth-1-half">
                  <img src="https://coffee-channel.com/wp-content/uploads/2017/05/coffee-2319129_1280.jpg" class="imgfoot" alt="">
                <div class="heart"></div>
                </div>
              </div>
              <!-- Troisième image -->
              <div class="col-lg-2 col-md-6 mb-4">
                <div class="view overlay z-depth-1-half">
                  <img src="https://cdn.fashiola.fr/I53509/768x0/5-comptes-instagram-mode-a-suivre-en-2017.jpg" class="imgfoot" alt="">
                <div class="heart"></div>
                </div>
              </div>
              <!-- Quatrième image -->
              <div class="col-lg-2 col-md-12 mb-4">
                <div class="view overlay z-depth-1-half">
                  <img src="https://www.studyrama.com/IMG/arton91985.png" class="imgfoot" alt="">
                <div class="heart"></div>
                </div>
              </div>
              <!-- Cinquième image -->
              <div class="col-lg-2 col-md-6 mb-4">
                <div class="view overlay z-depth-1-half">
                  <img src="  https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg99hfzKHzRiFqvPvdchycIuP0azOLGzCEXcwUfh7_SNMXbqIH7w" class="imgfoot" alt="">
                <div class="heart"></div>
                </div>
              </div>
              <!-- Sixième image -->
              <div class="col-lg-2 col-md-6 mb-4">
                <div class="view overlay z-depth-1-half">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoM-7rAVuuNI_HKNr3CgAyRHo3zROBjgtffdintmdsPKx9U_Jv" class="imgfoot" alt="">
                <div class="heart"></div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        </body>
</html>
          <?php  
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !!!!!';
        }
    }
    ?>