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
    <h1 id="titre">D A I L Y P I C S</h1>
    </nav>
    <p id="share">SHARE YOUR LIFE WITH ME</p>
    
    <!-- Fin Navbar -->


    <form action="login.php" method="post">
      <!-- Début Slide photo -->
      <div class="pt-5 d-flex justify-content-center">
        <div id="slide" class="sliding-background"></div>

        <!-- Fin Slide photo -->

        <div id="cont2" class="container">
        <span class="fa-stack fa-4x">
        <i class="fa fa-circle fa-stack-2x" style="color: white;"></i>
        <i class="fa fa-user fa-stack-1x" style="color: grey"></i>
      </span> 
          <div class="form-input fa-lg">
            <i class="fa fa-user" data-fa-transform="shrink-8 down-6" style="color: grey;" aria-hidden="true"></i>
            <input name="pseudo" type="text" placeholder="Pseudo" />
          </div>
          <div class="form-input fa-lg">
            <i class="fa fa-lock" style="color: grey;" aria-hidden="true"></i>
            <input name="password" type="password" placeholder="Mot de passe" />
          </div>
          <input type="submit" id="submit" value="valider" /><br>
          <a class="inscription" href="register.php">Inscris toi maintenant !</a>
        </div>
      </div>
    </form>

<footer id="unique">
<p>ART - DECORATION - STYLE - SHOPPING - VOYAGE - BEAUTE -  MUSIQUE - CINEMA - WEB - NATURE - SCIENCE - TECHNOLOGIE </p>
<div class="copyright text-center col">© 2018 Copyright: Dailypics.
</footer>

  </body>

  </html>
  <!-- Fin de code html -->

