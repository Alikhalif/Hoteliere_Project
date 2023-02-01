<?php
// require_once(MODELS.'/rooms.php');

class RoomController
{
    public function add(){
        View::load('addRoom');
    }

    public function ad(){
        View::load('add');
    }    

    public function list(){
        $rooms = new Rooms();
        $data['myrooms'] = $rooms->getAllRooms();
        View::load('list_room',$data);
    }

    public function addR(){
        if(isset($_POST['btnAdd'])){          

            $data = array(
                'imageR' => $_FILES['image'],
                'typeR' => $_POST['list1'],
                'type_suitsR' => $_POST['list2'],
                'numberR' => $_POST['number'],	
                'capaciteR' => $_POST['capacite'],
                'priceR' => $_POST['price']
            );

            if(empty($_POST['list2'])){
                $db = new Rooms();
                $db->insertRoom2($data);
            }else{
                $db = new Rooms();
                $db->insertRoom($data);
            }

            header('location: '.BURL.'Home/index');

        }
    }

    public function getRoom(){
        
        View::load('list_room');
    }

    //-----------  reservation

    public function reserv(){
        View::load('resarvation');
    }

    public function searchRoom(){
        if(isset($_POST['search'])){

            if(!empty($_POST['dated']) && !empty($_POST['datef']) && !empty($_POST['list1']) && !empty($_POST['list2'])){
                $data = array(
                    'dated' => $_POST['dated'],
                    'datef' => $_POST['datef'],
                    'list1' => $_POST['list1'],
                    'list2' => $_POST['list2'],
                );
                $_SESSION['dated'] = $_POST['dated'];
                $_SESSION['datef'] = $_POST['datef'];

    
                $db = new Rooms();
                $mydata['roomres'] = $db->search_All($data);

                View::load('resarvation',$mydata);
            }
            else if(!empty($_POST['dated']) && !empty($_POST['datef']) && !empty($_POST['list1'])){
                $data = array(
                    'dated' => $_POST['dated'],
                    'datef' => $_POST['datef'],
                    'list1' => $_POST['list1'],
                );
                $_SESSION['dated'] = $_POST['dated'];
                $_SESSION['datef'] = $_POST['datef'];

    
                $db = new Rooms();
                $mydata['roomres'] = $db->search_type($data);

                View::load('resarvation',$mydata);
            }

            // && empty($_POST['list1'])
            else if(!empty($_POST['dated']) && !empty($_POST['datef']) ){ 
                $data = array(
                    'dated' => $_POST['dated'],
                    'datef' => $_POST['datef']
                );
                $_SESSION['dated'] = $_POST['dated'];
                $_SESSION['datef'] = $_POST['datef'];

                $db = new Rooms();
                $mydata['roomres'] = $db->search_date($data);
                // die(print_r($mydata));
                View::load('resarvation',$mydata);

            }
            
             
                
        }
            
    }
    

    //--------------- book room
   

    public function getRoomR($id){
        $db = new Rooms();
        $data['room'] = $db->getRoom($id);
        // die(print_r($_POST));
        View::load('book',$data);
        // return $data;
    }

    public function getRoomR2($id){
        $db = new Rooms();
        $data['room'] = $db->getRoom($id);
        // die(print_r($_POST));
        View::load('book2',$data);
        // return $data;
    }

    public function book(){
        View::load('book');
    }

    public function bookRoom(){
        if(isset($_SESSION['user'])){
            if(isset($_POST['book'])){
                // die(print_r($_SESSION));
                $id = $_POST['idR'];
    
                $db = new Rooms();
                $room = $db->getRoom($id);
    
                $dt = strtotime($_SESSION['dated']) - strtotime($_SESSION['datef']);
                $nights = $dt / 86400;
                $total = $nights * $room['priceR']; 
    
                $data = array(
                    'idR' => $_POST['idR'],
                    'idUser' => $_SESSION['user'],
                    'dated' => $_SESSION['dated'],
                    'datef' => $_SESSION['datef'],
                    'total' => $total
                );
    
                $db = new Rooms();
                $db->ReservRoom($data);
                header('location: '.BURL.'Room/reserv');
            }
        }else{
            header('location: '.BURL.'Login/user');
        }      
    }

    public function bookSuitRoom(){
        // echo "xjkedx";
        // die(print("xhkex"));
        if(isset($_SESSION['user'])){
            if(isset($_POST['bookSuit'])){
                // die(print("hxekzx"));
                $idR = $_POST['idR'];
                
                $db = new Rooms();
                $room = $db->getRoom($idR);

                $dt = strtotime($_SESSION['dated']) - strtotime($_SESSION['datef']);
                $nights = $dt / 86400;
                $total = $nights * $room['priceR'];

                

                $data = array(
                    'idR' => $idR,
                    'idUser' => $_SESSION['user'],
                    'dated' => $_SESSION['dated'],
                    'datef' => $_SESSION['datef'],
                    'total' => $total,
                );

                // die(print_r($data));

                $db = new Rooms();
                $result = $db->ReservRoom($data);

                

                // $result = Rooms::ReservRoom($data);

                $db = new Rooms();
                $idres = $db->getidRes();

                // print_r($idres);

                // $idres = Rooms::getidRes();


                // print_r($_POST['nbrPerson']);
                if(!empty($_POST['nbrPerson'])){
                    if($room['typeR'] == 'suite'){
                        $i = 1;
                        while($i <= $_POST['nbrPerson']){
                            $datag = array(
                                'name' => $_POST['name'.$i],
                                'birthday' => $_POST['birthday'.$i],
                                'idres' => $idres[0],
                                'idUser' => $_SESSION['user']
                                // 'nbrPerson' => $_POST['nbrPerson']
                            );
        
                            // print_r($datag);
        
                            $db = new Rooms();
                            $gestResult = $db->addGests($datag);
        
                            $i++;
                        }
                    
                    }
                }
                header('location: '.BURL.'Room/reserv');
                // die(print_r($_POST));
                
            }
        }else{
            header('location: '.BURL.'Login/user');
        }  
    }

    public function bookRoom2(){
        if(isset($_SESSION['user'])){

            if(isset($_POST['bookSuit2'])){
                // die(print_r($_SESSION));
                $id = $_POST['idR'];

                $db = new Rooms();
                $room = $db->getRoom($id);

                $dt = strtotime($_POST['dated']) - strtotime($_POST['datef']);
                $nights = $dt / 86400;
                $total = $nights * $room['priceR']; 

                $data = array(
                    'idR' => $_POST['idR'],
                    'idUser' => $_SESSION['user'],
                    'dated' => $_POST['dated'],
                    'datef' => $_POST['datef'],
                    'total' => $total
                );

                $db = new Rooms();
                $db->ReservRoom($data);

                $db = new Rooms();
                $idres = $db->getidRes();

                // print_r($idres);

                // $idres = Rooms::getidRes();


                // print_r($_POST['nbrPerson']);
                if($room['typeR'] == 'suite'){
                    $i = 1;
                    while($i <= $_POST['nbrPerson']){
                        $datag = array(
                            'name' => $_POST['name'.$i],
                            'birthday' => $_POST['birthday'.$i],
                            'idres' => $idres[0],
                            'idUser' => $_SESSION['user']
                            // 'nbrPerson' => $_POST['nbrPerson']
                        );

                        // print_r($datag);

                        $db = new Rooms();
                        $gestResult = $db->addGests($datag);

                        $i++;
                    }
                
                }
                // die(print_r($_POST));
                
            
            }    
        }else{
            header('location: '.BURL.'Login/user');
        }      
    }

    

    public function profile(){
        $db = new Rooms();
        $data['reservations'] = $db->getAllReservation();
        View::load('profile',$data);
    }

    public function deleteRes($id){
        $db = new Rooms();
        $result = $db->deleteRservation($id);
        if($result){
            header('location: '.BURL.'Room/profile');
        }
    }

    public function getRoomUpdat($id){
        $db = new Rooms();
        $data['room'] = $db->getRoom($id);
        // die(print_r($_POST));
        View::load('UpdateRoom',$data);
        // return $data;
    }

    public function UpdateRoom($id){
        
    }
}