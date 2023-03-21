<?php 

      function Input($size, $label, $nom, $type, $placeholder) {
            $un =  '<div class="col-md-'.$size.'">
                     <label for="'.$label.'"class="form-label text-light"></label>
                     ';

            $deux= '';

            $trois= '<input type="'.$type.'" name="'.$nom.'" class="form-control" id="'.$nom.'" placeholder="'.$placeholder.'"/></input>
            </div>';

            if($type != "submit"){
                  $deux='<label for="'.$nom.'" class="form-label">'.$label.'</label>';
            }

            return $un.$deux.$trois;
      }
    ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Bootstrap demo</title>
  </head>
  <body>

   <footer>
     <div class="container">
        <div class="row bg-danger p-2 mt-4">
            <form action="result.php" method = "get">
                <?php 
                    echo Input("4", "nom", "votre nom", "text", "Entrez un nom" );
                    echo Input("4", "prenom", "votre prenom", "text", "Entrez un prenom" );
                    echo Input("4", "email", "votre email", "text", "Entrez un email" );
                    echo Input("4", "telephone", "votre telephone", "text", "Entrez un telephone" );
                    echo Input("4", "password", "votre password", "text", "Entrez un mot de passe" );
                    echo Input("4", "password2", "votre password2", "text", "Entrez un confirmation mot de passe" );
                    echo Input("4", "envoyez", "Envoyez", "submit", "" );
                ?>
            </form>
        </div>
     </div>
    </footer>
  </body>
</html>













