<?php

class  Connect {

    private $hostname = "localhost";
    private $database_name = "blog_admin_db";
    private $database_user = "root";
    private $database_pass = "";

    protected $con;
    //data source name

    public function __construct(){
        
        try {
            $this->con =new PDO("mysql:host=$this->hostname;dbname=$this->database_name",$this->database_user,$this->database_pass); 
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}



?>