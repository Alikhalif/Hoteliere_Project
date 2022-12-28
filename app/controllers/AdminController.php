<?php
    class AdminController
    {
        public function dash(){
            $rooms = new Rooms();
            $data['myrooms'] = $rooms->getAllRooms();
            View::load('admin',$data);
        }

        public function deleteR($id){

            $t = new Rooms();
            $t->delete($id);
                
            header('location: '.BURL.'Admin/dash');
        }
    }