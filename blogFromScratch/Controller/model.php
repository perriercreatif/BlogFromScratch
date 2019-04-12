<?php


class Model{

  private $dbConnect;

  public function __construct($dbConnect){
    $this->dbConnect = $dbConnect;
  }
  /**
  *Affiche tous les posts
  *
  */
  public function getAllPosts(){
    $sql = 'SELECT * FROM posts';
    $req = $this->dbConnect->query($sql);
    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
  }
  /**
  *Affiche tous les posts
  *
  */
  public function getTenPosts(){
    $sql = 'SELECT * FROM posts ORDER BY id DESC LIMIT 0, 6';
    $req = $this->dbConnect->query($sql);
    $result = $req->fetchAll(PDO::FETCH_OBJ);

    return $result;
  }
  /**
  *affiche un post selon ID
  *
  */
  public function getOnePostWithID($id){
    $sql = 'SELECT * FROM posts WHERE id = :ID';
    $req = $this->dbConnect->prepare($sql);
    $req-> execute(array('ID' => $id));

    if($req->rowCount() == 1){
      $result = $req->fetchAll(PDO::FETCH_OBJ);
      return $result;
    }else {
      header('location: ?route= ');
    }
  }
  /**
  *creer un nouveau post dans la BD
  *
  */
  public function creatPosts($datas){
    $sql = 'INSERT INTO posts(title,post,create_date) VALUES (:title, :post, NOW())';
    $req = $this->dbConnect->prepare($sql);
    $req-> execute(array('title' => $datas['title'],
                          'post' => $datas['post']
  ));
}
/**
*Updat un post dans la BD
*
*/
public function upDateOnePost($datas){
  $sql = 'UPDATE posts SET title = :title, post = :post, create_date = NOW() WHERE id ='.$_GET['id'] ;
  $req = $this->dbConnect->prepare($sql);
  $req-> execute(array('title' => $datas['title'],
                        'post' => $datas['post']
                      ));
}
/**
*supprime un post dans la BD
*
*/
public function DeleteOnePostWithID($id){


     $sql = 'DELETE FROM posts WHERE id = :ID LIMIT 1';
     $req = $this->dbConnect->prepare($sql);
     $req-> execute(array('ID' => $id));


 }

}
