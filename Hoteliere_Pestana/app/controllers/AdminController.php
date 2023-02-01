<?php
    require_once(MODELS.'/authant.php');
    class AdminController
    {
        // public function addA(){
        //     View::load('adminRegister');
        // }

        public function loginA(){
            View::load('adminLogin');
        }

        // public function add(){
        //     if(isset($_POST['register'])){

        //         // $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $_POST['nom']);
        //         // $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $_POST['email']);
        //         // $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $_POST['password']);

        //         if(!empty($_POST['nom']) || !empty($_POST['password'])){
        //             $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //             $data = array(
        //                 'name' => $_POST['nom'],
        //                 'pass' => $pass
        //             );

        //             $db = new Auth();
        //             $db->addAd($data);
        //         }else{
        //             $errorMsgReg="Username or Email already exists.";
        //         }
  
                

        //         // header('location: '.BURL.'Login/user');
        //     }
        // }

        public function login(){
            if(isset($_POST['login'])){
                $data = array(
                    'name' => $_POST['nom'],
                    'pass' => $_POST['password']
                );

                $db = new Auth();
                $users = $db->logInAd($data);

                if(password_verify($data['pass'], $users['password'])){
                    $_SESSION['admin'] = $users['idA'];
                    header('location: '.BURL.'Home/index');
                    // echo 'valied';
                }
                else {
                    echo "erorr";
                }
            }
        }

        public function dash(){
            if(isset($_SESSION['admin'])){
                $rooms = new Rooms();
                $data['myrooms'] = $rooms->getAllRooms();
                View::load('admin',$data);
            }else{
                header('location: '.BURL.'Admin/loginA');
            }
                
        }

        public function reservA(){
            if(isset($_SESSION['admin'])){
                $rooms = new Rooms();
                $data['reservations'] = $rooms->getAllReservationA();
                View::load('listReservationA',$data);
            }else{
                header('location: '.BURL.'Admin/loginA');
            }
                
        }


        public function deleteR($id){
            if(isset($_SESSION['admin'])){

                $t = new Rooms();
                $t->delete($id);
                    
                header('location: '.BURL.'Admin/dash');
            }else{
                header('location: '.BURL.'Admin/loginA');
            }
        }

        public function deleteRes($id){
            if(isset($_SESSION['admin'])){
                $db = new Rooms();
                $result = $db->deleteRservation($id);
                if($result){
                    header('location: '.BURL.'admin/reservA');
                }

            }else{
                header('location: '.BURL.'Admin/loginA');
            }
        }

        public function getRoomU($id){
            $db = new Rooms();
            $data['room'] = $db->getRoom($id);
            View::load('UpdateRoom',$data);
        }

        public function editroom($id){
            if(isset($_SESSION['admin'])){

                if(isset($_POST['btnEdit'])){
                    
                    $db = new Rooms();
                    $room = $db->getRoom($id);
                    // die(print_r($room));

                    if(empty($_FILES['image']['name'])){
                        $img = $room['imageR'];
                    }else{
                        $img = $_FILES['image'];
                    }
                    // else{
                        // $img = $_FILES['image']['name'];
                        // $file_sur= 'uploads/'.$img;
                        // $file_tmp = $_FILES["image"]['tmp_name'];
                        // move_uploaded_file($file_tmp,$file_sur);
                    // }

                    if(empty($_POST['number'])){
                        $number = $room['numberR'];
                    }else{
                        $number = $_POST['number'];
                    }

                    if(empty($_POST['capacite'])){
                        $capacite = $room['capaciteR'];
                    }else{
                        $capacite = $_POST['capacite'];
                    }

                    if(empty($_POST['price'])){
                        $price = $room['priceR'];
                    }else{
                        $price = $_POST['price'];
                    }

                    if(empty($_POST['list1'])){
                        $type = $room['typeR'];
                    }else{
                        $type = $_POST['list1'];
                    }

                    if(empty($_POST['list2'])){
                        $typeSuit = $room['type_suitsR'];
                    }else{
                        $typeSuit = $_POST['list1'];
                    }




                    $data = array(
                        'id' => $id,
                        'imageR' => $img,
                        'typeR' => $type,
                        'type_suitsR' => $typeSuit,
                        'numberR' => $number,	
                        'capaciteR' => $capacite,
                        'priceR' => $price
                    );
        
                    
                    $db = new Rooms();
                    $db->UpdateRoom($data);
                    
        
                    header('location: '.BURL.'Home/index');
                }
            }else{
                header('location: '.BURL.'Admin/loginA');
            }
        }
    }