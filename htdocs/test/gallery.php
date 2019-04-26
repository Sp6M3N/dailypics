<?php
session_start();
include "../connexion.php";

if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {
    $reponse = $db->query("SELECT image FROM images");
    $images = $reponse->fetchAll();
        ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Dailypics</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../test2.css">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>

<body id="secondbody">
  <nav class="bg- navbar navbar-light d-flex flex-column">
    <div class="container d-flex justify-content-center">
      <div class="col">
        <a  style="text-decoration:none" href="myprofile.php"><h1 id="titre">D A I L Y P I C S</h1></a>
      </div>
    </div>
    <div>
      <a href="myprofile.php"><button type="button" class="btn btn-outline-dark">MON PROFIL</button></a>
      <a href="gallery.php"><button type="button" class="btn btn-outline-dark">MON FIL D'ACTUALITE</button></a>
    </div>
  </nav>
            <!-- <?php echo 'Bonjour ' . $_SESSION['pseudo'] . $_SESSION['id']; ?> -->
        


            <?php

$i = 0;
foreach ($images as $image){
        echo '<button style="border:0px" type="button"  data-toggle="modal" data-target="#exampleModal'. $i .'" data-whatever="@mdo">
              <img src="uploads/'. $image['image'] .'"alt="" style="width:100%;max-width:300px"></button>

<div class="modal fade" id="exampleModal'. $i .'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          <img src="uploads/'. $image['image'] .'"alt="" style="width:100%;max-width:300px">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>';
$i++;
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

    </html>

<?php
}
?>