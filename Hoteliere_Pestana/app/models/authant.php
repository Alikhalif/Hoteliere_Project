<?php
    class Auth
    {
        public function add($data){

            $db = DB::connect()->prepare("INSERT INTO user(name, email, password) VALUES (:nom, :email, :pass)");
            $db->bindParam(':nom',$data['name']);
            $db->bindParam(':email',$data['email']);
            $db->bindParam(':pass',$data['pass']);
            if($db->execute()){
                return "ok";
            }else{
                return "error";
            }
        }

        public function logIn($data){
            $db = DB::connect()->prepare("SELECT * FROM user WHERE email = ? ");
            $db->execute([$data['email']]);
            $users = $db->fetch();

            return $users;
            
        }


        public function addAd($data){

            $db = DB::connect()->prepare("INSERT INTO admin(name, password) VALUES (:nom, :pass)");
            $db->bindParam(':nom',$data['name']);
            $db->bindParam(':pass',$data['pass']);
            $db->execute();
        }

        public function logInAd($data){
            $db = DB::connect()->prepare("SELECT * FROM admin WHERE name = ? ");
            $db->execute([$data['name']]);
            $users = $db->fetch();

            return $users;
            
        }
    }