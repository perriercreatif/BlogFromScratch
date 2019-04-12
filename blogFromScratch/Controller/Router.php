<?php

class Router{


  private $_route;
  private $datas ;

  public function checkRoute()
  {
    $mc = new MainController();
    if (isset($_GET["route"]))
    {
      $this->_route = $_GET["route"];

      if($this->_route == 'bo')
      {
        $mc->showBO();
      }
      elseif($this->_route == 'home')
      {
        $mc->showHome();
      }
      elseif($this->_route == 'allposts')
      {
        $mc->showAllPosts();
      }
      elseif ($this->_route == 'connexion')
      {
        $mc->showConnexion();
      }
      elseif ($this->_route == 'createOnePost')
      {
        $mc->showCreateOnePost();
      }
      elseif ($this->_route == 'logout')
      {
        $mc->deconnectThisGuy();
      }
      elseif($this->_route == 'deleteOnePost'){
        if(isset($_GET['id'])){
          $mc->deletePost( $_GET['id']);
        }else{
          $mc->show404();
        }
      }

      elseif($this->_route == 'upDateOnePost'){
        if(isset($_GET['id'])){
          $mc->upDatePost( $_GET['id']);
        }else{
          $mc->show404();
        }
      }
      //route=onePost&id=1
      elseif($this->_route == 'onePost'){
        if (!isset($_SESSION['login'])){
          if(isset($_GET['id'])){
            $mc->showOnePost( $_GET['id']);
          }
          else{
            $mc->show404();
          }
        }elseif (isset($_SESSION['login'])){
          if(isset($_GET['id'])){
            $mc->showOnePostAdmin( $_GET['id']);
          }else{
            $mc->show404();
          }
        }
      }
      elseif ($this->_route == 'postAdmin')
      {
        $mc->showPostAdmin();
      }
      else
      {
        $mc->show404();
      }
    }
    else
    {
      $mc->showHome();
    }
  }
}
