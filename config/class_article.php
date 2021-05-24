<?php
include_once('connection.php');
 
class Article extends Connect
{
    // public function __construct(){
 
    //     parent::__construct();
    // }
 

        // Get all articles
    public function getAll(){
        $sql = $this->con->prepare("SELECT * FROM article ORDER BY id DESC");
        if($sql->execute()){
            $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
            if(count($rows) > 0){
                return $rows;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    // Get single article
    public function Find($id){
        $sql = $this->con->prepare("SELECT * FROM article WHERE id = :id");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            $rows = $sql->fetch(PDO::FETCH_ASSOC);
            if(count($rows) > 0){
                return $rows;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    // Add Article
    public function add($title,$date,$content,$image){
        $sql =  $this->con->prepare("INSERT INTO article (title,date,content,image) VALUES (:title,:date,:content,:image)");
        $sql->bindParam(':title',$title,PDO::PARAM_STR);   // kayakhod dak key lli fih : w kay remplacih b variable lli 3tinah //                                                   هاديكstatement sql لي عندنا تنربطوها ب parameters الي كاينين تما title and date....
        $sql->bindParam(':date',$date,PDO::PARAM_STR);
        $sql->bindParam(':content',$content,PDO::PARAM_STR);
        $sql->bindParam(':image',$image,PDO::PARAM_STR);
        if($sql->execute()){
            return true;
        }else{

            return false;
        }
    }

    // Update Article
    public function Update($id,$title,$date,$content,$image){
        $sql =  $this->con->prepare("UPDATE article SET title=:title,date=:date,content=:content,image=:image  WHERE id=:id");
        $sql->bindParam(':title',$title,PDO::PARAM_STR);
        $sql->bindParam(':date',$date,PDO::PARAM_STR);
        $sql->bindParam(':content',$content,PDO::PARAM_STR);
        $sql->bindParam(':image',$image,PDO::PARAM_STR);
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete article
    public function Delete($id){
        $sql = $this->con->prepare("DELETE FROM article WHERE id = :id");
        $sql->bindParam(':id',$id,PDO::PARAM_INT);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
 
    // public function execute($sql){
 
    //     $query = $this->con->query($sql);
 
    //     if ($query == false) {
    //         return false;
    //     } else {
    //         return true;
    //     }        
    // }
}