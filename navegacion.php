<?php 
   echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">';
      echo '<div class="container">';
        echo '<a class="navbar-brand" href="#">';
          echo '<a href="index.php"><img src="./img/cofaa.png" width="90" height="50" alt=""></a>';
        echo '</a>';
        echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">';
          echo '<span class="navbar-toggler-icon"></span>';
        echo '</button>';
        echo '<div class="collapse navbar-collapse" id="navbarResponsive">';
          echo '<ul class="navbar-nav ml-auto">';
            echo '<li class="nav-item active">';
              echo '<a class="nav-link" href="index.php">INICIO';
                echo '<span class="sr-only">(current)</span>';
              echo '</a>';
            echo '</li>';
            echo '<li class="nav-item">';
              echo '<a class="nav-link" href="conocenos.php">CONÓCENOS</a>';
            echo '</li>';
            echo '<li class="nav-item" style="display:none;">';
              echo '<a class="nav-link" href="librero.php">Librero</a>';
            echo '</li>';
            echo '<li class="nav-item" style="display:none;">';
              echo '<a class="nav-link" href="#">Contacto</a>';
            echo '</li>';
          echo '</ul>';
        echo '</div>';
      echo '</div>';
    echo '</nav>';
?>