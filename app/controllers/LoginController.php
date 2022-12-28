<?php
    class LoginController
    {
        public function user(){
            View::load('userLogin');
        }

        public function register(){
            View::load('userRegister');
        }

        public function addUser(){
            if(isset($_POST['register'])){

                $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $data = array(
                    'name' => $_POST['nom'],
                    'email' => $_POST['email'],
                    'pass' => $pass
                );

                $db = new Auth();
                $db->add($data);
            }
        }

    }
