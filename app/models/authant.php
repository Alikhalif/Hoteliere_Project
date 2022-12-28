<?php
    class Auth
    {
        public function add($data){

            $db = DB::connect()->prepare("INSERT INTO user(name, email, password) VALUES (:name, :email, :password)");
            $db->bindParam(':name',$data['name']);
            $db->bindParam(':email',$data['email']);
            $db->bindParam(':password',$data['pass']);
            $db->execute();
        }
    }