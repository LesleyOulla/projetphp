
<!doctype html>
<html lang="fr">
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
        <form class="row" action="result.php" method="get">
                 <?php 
                 // appelez la fonction avec "$form->"

                 echo $Form->Input("4", "email", "Votre email", "email", "Entrer un email");
                 echo $Form->Input("4", "password", "Votre mot de passe", "password", "Entrer un mot de passe");
                 echo $Form->Input("4", "Envoyer", "Envoyer", "submit", "");
                 ?>
             </form>
        </div>
     </div>
    </footer>
  </body>
</html>

