<?php
require 'connexion.php';

if (isset($_POST['pseudo'])) {
 
  $pseudo = $_POST['pseudo'];
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $insertclient = $db->prepare("INSERT INTO users(pseudo, password) 
                              VALUES(?,?)");

  $insertclient->execute(array(
    $pseudo,
    $pass
  ));

  header('Location: index.php');
} else {
  ?>
<!-- Debut de code html -->
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
  <a  style="text-decoration:none" href="register.php"><h1 id="titre"  >D A I L Y P I C S</h1>
  </nav>
  <p id="share">CREATION D'UN NOUVEAU COMPTE</p>


  <!-- Fin Navbar -->

  <div id="image-bg" class="container">


    <!-- Début Authentification -->

  <form method="post">
    <div id="cont" class="container">
      <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x" style="color: white"></i>
            <i class="far fa-address-card fa-stack-1x" style="color: grey"></i>
          </span>
      <div class="form-input fa-lg">
        <i class="fa fa-user" data-fa-transform="shrink-8 down-6" style="color: grey;" aria-hidden="true"></i>
       <input name="pseudo" type="text" placeholder="Pseudo" required></div>
      <div class="form-input fa-lg">
        <i class="fa fa-lock" style="color: grey;" aria-hidden="true"></i>
        <input name="password" type="password" placeholder="Mot de passe" required></div>
        <div class="form-input fa-lg">
            <i class="fa fa-lock" style="color: grey;" aria-hidden="true"></i>
            <input name="confirm_password" type="password" placeholder="Confirme le mot de passe" required>
          </div>
        <input type="submit" id="submit" value="valider" /><br>

        <a class="inscription" href="index.php">Déjà inscrit !</a>
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
            <a href="">
              <div class="heart"></div>
            </a>
          </div>
        </div>
      
        <!-- Deuxième image -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="https://coffee-channel.com/wp-content/uploads/2017/05/coffee-2319129_1280.jpg" class="imgfoot" alt="">
            <a href="">
              <div class="heart"></div>
            </a>
          </div>
        </div>
        <!-- Troisième image -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="https://cdn.fashiola.fr/I53509/768x0/5-comptes-instagram-mode-a-suivre-en-2017.jpg" class="imgfoot" alt="">
            <a href="">
              <div class="heart"></div>
            </a>
          </div>
        </div>
        <!-- Quatrième image -->
        <div class="col-lg-2 col-md-12 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="https://www.studyrama.com/IMG/arton91985.png" class="imgfoot" alt="">
            <a href="">
              <div class="heart"></div>
            </a>
          </div>
        </div>
        <!-- Cinquième image -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="  https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg99hfzKHzRiFqvPvdchycIuP0azOLGzCEXcwUfh7_SNMXbqIH7w" class="imgfoot" alt="">
            <a href="">
              <div class="heart"></div>
            </a>
          </div>
        </div>
        <!-- Sixième image -->
        <div class="col-lg-2 col-md-6 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoM-7rAVuuNI_HKNr3CgAyRHo3zROBjgtffdintmdsPKx9U_Jv" class="imgfoot" alt="">
            <a href="https://scontent-frx5-1.cdninstagram.com/vp/cff8d3572341c58c4b83d83a934bf54e/5CDBF623/t51.2885-15/e35/51080377_138965930470384_8072846598461112522_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com&se=7&ig_cache_key=MTk3NjI2MDcyNTQ2MDQzMjYyOQ%3D%3D.2">
              <div class="heart"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

       <!-- <div class="copyright text-center col">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
      </div>  -->
  <!-- Fin Footer -->
</body>
</html>
<!-- Fin de code html -->
<?php
}
?>