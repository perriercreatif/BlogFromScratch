<?php

class MainController{

  private $bddObject;
  private $modelObject;


  public function __construct(){
    $this->bddObject = new BDDConnect();
    $this->modelObject = new Model( $this->bddObject->getConnect());
  }

  public function showAllPosts(){
    $datas = $this->modelObject->getAllPosts();
    include('Views/homeAllPosts.php');
  }


  public function showHome(){
    $datas = $this->modelObject->getTenPosts();
    include('Views/home.php');
  }

  public function showBO(){
    if(isset($_SESSION['login'])){
      include('Views/bo.php');
    }else{
      header('Location:index.php?route=connexion');
    }
  }

  public function showCreateOnePost(){
    if(isset($_SESSION['login'])){
      include('Views/CreateOnePost.php');
      if(isset($_POST['title'])&& isset($_POST['post'])) {
        if (trim(htmlspecialchars($_POST['title'])) && trim(htmlspecialchars($_POST['post']))){
          $datas = array('title' => $_POST['title'],
          'post' => $_POST['post']
        );
        $this->modelObject->creatPosts($datas);
        header('Location:index.php?route=postAdmin');
      }
      else
      {
        header('Location:index.php?route=createOnePost');
      }
    }
  }else{
    header('Location:index.php?route=connexion');
  }
}
public function upDatePost($id){
  if(isset($_SESSION['login'])){
    $onePost = $this->modelObject->getOnePostWithID($id);
    include('Views/UpDateOnePost.php');


    if(isset($_POST['submit'])&& isset($_POST['title'])&& isset($_POST['post'])) {
      if (trim(htmlspecialchars($_POST['title'])) && trim(htmlspecialchars($_POST['post']))){
        $datas = array('title' => $_POST['title'],
        'post' => $_POST['post']

      );
      $this->modelObject->upDateOnePost($datas);
      header('Location:index.php?route=postAdmin');
    }else{
      header('Location:index.php?route=postAdmin');
    }
  }
}else{
  header('Location:index.php?route=connexion');
}
}

public function show404(){
  include('Views/error.php');
}

public function showOnePost($id){
  $onePost = $this->modelObject->getOnePostWithID($id);
  include('Views/onePost.php');
}
public function showOnePostAdmin($id){
  $onePost = $this->modelObject->getOnePostWithID($id);
  include('Views/onePostAdmin.php');
}

public function showPostAdmin(){
  if(isset($_SESSION['login'])){
    $datas = $this->modelObject->getAllPosts();
    include('Views/viewsPostAdmin.php');
  }else{
    header('Location:index.php?route=connexion');
  }
}

public function showConnexion(){
  include('Views/connexion.php');
}

public function deletePost($id){
  if(isset($_SESSION['login'])){
    $datas = $this->modelObject->DeleteOnePostWithID($id);
    header('Location:index.php?route=postAdmin');
  }else{
    header('Location:index.php?route=connexion');
  }
}


public function deconnectThisGuy(){
  session_destroy();
  header('location: ?route=home');
}

public function ShowDeco(){
  include('Views/deco.php');
}


}
