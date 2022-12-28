<?php

class HomeController
{
    public function index(){
        // $db = new rooms();
        // $data['myrooms'] = $db->getAllRooms();
        View::load('home');
    }

    // public function getRooms(){
    //     $db = new rooms();
    //     $data['myrooms'] = $db->getAllRooms();
    //     View::load('home',$data);
    // }
}