<?php

class HomeController
{
    public function index(){
        $db = new Rooms();
        $data['roomH'] = $db->roomHome();
        View::load('home',$data);
    }

    // public function getRooms(){
    //     $db = new rooms();
    //     $data['myrooms'] = $db->getAllRooms();
    //     View::load('home',$data);
    // }
    
}