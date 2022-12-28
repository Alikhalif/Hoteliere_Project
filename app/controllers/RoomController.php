<?php
// require_once(MODELS.'/rooms.php');

class RoomController
{
    public function add(){
        View::load('addRoom');
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

            // var_dump($data);
            
            $db = new Rooms();
            $db->insertRoom($data);
            // header('location: '.BURL.'Home/index');

        }
    }

    public function getRoom(){
        
        View::load('list_room');
    }

    
}