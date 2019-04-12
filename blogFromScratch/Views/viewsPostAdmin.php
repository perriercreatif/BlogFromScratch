
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Posts Scratch Post Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h1>Gestion des Posts</h1>
        <a href="?route=home">Home</a>
        - <a href="?route=bo">DashBoard</a>
        - <a href="?route=logout">Fermer la session</a>
      </div>

      <div class="col-lg-12 m-3">
        <a href="?route=createOnePost" class="btn btn-primary">Créer un nouveau post</a>
      </div>

      <div class="affichagePost">
        <table>
          <tr class="tableau">
            <th scope="col" class="tableauId">Id</th>
            <th scope="col" class="tableauDate">Date de Création</th>
            <th scope="col" class="tableauTitle">Title</th>
            <th scope="col" class="tableauPost">Contenu</th>
            <th scope="col" class="picto">Voir</th>
            <th scope="col" class="picto">Modifier</th>
            <th scope="col" class="picto">Supprimer</th>
          </tr>
          <?php
          for ($i=0; $i< count($datas); $i++){
            $id = $datas[$i]->id;
            ?>
            <tr>
              <th scope="col" class="tableauId"><?php echo $datas[$i]->id; ?></th>
              <th scope="col" class="tableauDate"><?php echo $datas[$i]->create_date; ?></th>
              <th scope="col" class="tableauTitle"><?php echo $datas[$i]->title; ?></th>
              <th scope="col" class="tableauPost"><?php echo strip_tags(substr($datas[$i]->post, 0, 40)); ?></th>
              <th scope="col" class="picto"><?php echo '<a href="index.php?route=onePost&id='.$id.'"><i class="fas fa-eye"></i></a>'; ?></th>
              <th scope="col" class="picto"><?php echo '<a href="index.php?route=upDateOnePost&id='.$id.'"><i class="fas fa-edit"></i></a>'; ?></th>
              <th scope="col" class="picto"><?php echo '<a href="index.php?route=deleteOnePost&id='.$id.'" onClick="if (!confirm(\'confirmer suppression ?\')) return false;"><i class="fas fa-eraser"></i></a>'; ?></th>
            </tr>

            <?php
          }
          ?>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
