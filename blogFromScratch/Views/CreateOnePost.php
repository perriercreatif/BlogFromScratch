
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="utf-8">
  <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=867pidotkwnzssjneo6rrk85t88uejpu0t4grr4okf87ktfc"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <title>Admin Scratch création</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2>Création Post</h2>
        <a href="?route=home">Home</a>
         - <a href="?route=postAdmin">Mes Posts</a>
           - <a href="?route=bo">DashBoard</a>
           - <a href="?route=logout">Fermer la session</a>

        <form action="?route=createOnePost" method="post">
          <div>
            <label for="title">Titre du post</label><br />
            <input type="text" id="title" name="title" />
          </div>
          <div>
            <label for="post"> - Corp du post - </label><br />
            <textarea id="mytextarea" name="post" rows="15" cols="100"></textarea>
          </div>
          <div>
            <input type="submit" name="submit"/>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
