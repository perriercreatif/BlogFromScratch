
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>My Blog From Scratch Posts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h1>Tous mes Posts</h1>
          <a href="?route=home">Home</a>
         - <a href="?route=bo">Dashboard</a>
        <br>
        <hr>
        <article class="row">


            <?php
            for ($i=0; $i< count($datas); $i++){
              $id = $datas[$i]->id;
              echo '<div class="col-4">Post n°'.$datas[$i]->id;
              echo ' le '.$datas[$i]->create_date;
              echo '<h2>'.substr($datas[$i]->title, 0, 50).'</h2>';
              echo '<p>'.$datas[$i]->post.'</p>';
              echo '<br>';
              echo '<a href="index.php?route=onePost&id='.$id.'">Show Post</a>';
              echo '<hr></div>';

            }
            ?>
        </article>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
