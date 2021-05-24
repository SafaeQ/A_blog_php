<?php

class User extends Connect{ 

    public function login($email,$password){
        $sql = $this->con->prepare("SELECT * FROM admins WHERE email= :email and password= :password");
        $sql->bindParam(':email',$email,PDO::PARAM_STR);
        $sql->bindParam(':password',$password,PDO::PARAM_STR);
        if($sql->execute()){
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0){
                    return $result[0];
                }else{
                    return false;
                }
        }else{
            return false;
        } 
    }
}

?>