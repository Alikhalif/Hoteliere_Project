<?php
    require_once(MODELS.'/authant.php');

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

                // $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $_POST['nom']);
                // $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $_POST['email']);
                // $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $_POST['password']);

                if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password'])){
                    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $data = array(
                        'name' => $_POST['nom'],
                        'email' => $_POST['email'],
                        'pass' => $pass
                    );

                    $db = new Auth();
                    $res = $db->add($data);
                    header('location: '.BURL.'Login/user');
                   
                }else{
                    Message::set("error","Please fill in all fields.");
                    header('location: '.BURL.'Login/register');
                }
  
                

                // header('location: '.BURL.'Login/user');
            }
        }

        public function loginUser(){
            if(isset($_POST['login'])){
                if(!empty($_POST['email']) && !empty($_POST['password'])){
                    $data = array(
                        'email' => $_POST['email'],
                        'pass' => $_POST['password']
                    );

                    $db = new Auth();
                    $users = $db->logIn($data);

                    if(password_verify($data['pass'], $users['password'])){
                        $_SESSION['user'] = $users['idU'];
                        header('location: '.BURL.'Home/index');
                        // echo 'valied';
                    }
                    else {
                        Message::set("error","The password is incorrect.");
                        header('location: '.BURL.'Login/user');
                    }
                }else{
                    Message::set("error","Please fill in all fields.");
                    header('location: '.BURL.'Login/user');
                }
            }
        }

        public function logout(){
            session_unset();
            session_destroy();
            header('location: '.BURL.'Home/index');
        }

    }
