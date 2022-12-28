<?php
    
    class Rooms
    {
        public function insertRoom($data){
            // var_dump($data);
            $filename = $data['imageR']['name'];
            $file_sur= 'uploads/'.$filename;
            $file_tmp = $data["imageR"]['tmp_name'];
            move_uploaded_file($file_tmp,$file_sur);

            $db = DB::connect()->prepare("INSERT INTO room(imageR, typeR, type_suitsR, numberR, capaciteR, priceR) VALUES (:imageR, :typeR, :type_suitsR, :numberR, :capaciteR, :priceR)");
            $db->bindParam(':imageR',$filename);
            $db->bindParam(':typeR',$data['typeR']);
            $db->bindParam(':type_suitsR',$data['type_suitsR']);
            $db->bindParam(':numberR',$data['numberR']);
            $db->bindParam(':capaciteR',$data['capaciteR']);
            $db->bindParam(':priceR',$data['priceR']);
            $db->execute();
        }

        public function getAllRooms(){
            $db = DB::connect()->prepare("SELECT * FROM room");
            $db->execute();
            $rooms = $db->fetchAll();
            return $rooms;
        }

        public function delete($id){
            $db = DB::connect()->prepare("DELETE FROM room WHERE idR = $id");
            $db->execute();
            if($db->execute()){
                return "ok";
            }else{
                return "errur";
            }
        }
    }