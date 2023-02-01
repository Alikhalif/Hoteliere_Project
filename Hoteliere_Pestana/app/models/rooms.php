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

        public function insertRoom2($data){
            // var_dump($data);
            $filename = $data['imageR']['name'];
            $file_sur= 'uploads/'.$filename;
            $file_tmp = $data["imageR"]['tmp_name'];
            move_uploaded_file($file_tmp,$file_sur);

            $db = DB::connect()->prepare("INSERT INTO room(imageR, typeR, numberR, capaciteR, priceR) VALUES (:imageR, :typeR, :numberR, :capaciteR, :priceR)");
            $db->bindParam(':imageR',$filename);
            $db->bindParam(':typeR',$data['typeR']);
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

        public function roomHome(){
            $db = DB::connect()->prepare("SELECT * FROM room limit 3");
            $db->execute();
            $roomH = $db->fetchAll();
            return $roomH;
        }


        // ------------- reservation 

        public function search($data){
            $type = $data['list1'];
            $type_suit = $data['list2'];



            if(empty($type_suit)){
                // $db = DB::connect()->prepare("SELECT * FROM room WHERE typeR = :dtype");
                $db = DB::connect()->prepare("SELECT * FROM room WHERE typeR = :dtype");
                $db->bindValue(':dtype', $type);
                $db->execute();
                $rooms = $db->fetchAll();
                return $rooms;
            }else{
                $db = DB::connect()->prepare("SELECT * FROM room WHERE typeR = :dtype AND type_suitsR = :dtype_suits");
                $db->bindValue(':dtype', $type);
                $db->bindValue(':dtype_suits', $type_suit);
                $db->execute();
                $rooms = $db->fetchAll();
                return $rooms;
                
            }
        }

        public function search_date($data){
            $db = DB::connect()->prepare("SELECT rm.* FROM room rm LEFT JOIN reservation res ON rm.idR = res.roomID 
                                        AND(:dated BETWEEN res.DateD AND res.DateF OR :datef BETWEEN res.DateD 
                                        AND res.DateF OR (:dated <= res.DateD AND :datef >= res.DateF)) 
                                        WHERE res.roomID IS NULL;");
            $db->bindValue(':dated', $data['dated']);
            $db->bindValue(':datef', $data['datef']);
            $db->execute();
            $rooms = $db->fetchAll();
            return $rooms;
        }

        public function search_type($data){
            $db = DB::connect()->prepare("SELECT rm.* FROM room rm LEFT JOIN reservation res ON rm.idR = res.roomID 
                                        AND(:dated BETWEEN res.DateD AND res.DateF OR :datef BETWEEN res.DateD 
                                        AND res.DateF OR (:dated <= res.DateD AND :datef >= res.DateF)) 
                                        WHERE res.roomID IS NULL AND rm.typeR = :typeR;");
            $db->bindValue(':dated', $data['dated']);
            $db->bindValue(':datef', $data['datef']);
            $db->bindValue(':typeR', $data['list1']);
            $db->execute();
            $rooms = $db->fetchAll();
            return $rooms;
        }


        public function search_All($data){
            $db = DB::connect()->prepare("SELECT rm.* FROM room rm LEFT JOIN reservation res ON rm.idR = res.roomID 
                                            AND(:dated BETWEEN res.DateD AND res.DateF OR :datef BETWEEN res.DateD 
                                            AND res.DateF OR (:dated <= res.DateD AND :datef >= res.DateF)) 
                                            WHERE res.roomID IS NULL AND rm.typeR = :typeR AND rm.type_suitsR = :suite_type;");
            $db->bindValue(':dated', $data['dated']);
            $db->bindValue(':datef', $data['datef']);
            $db->bindValue(':typeR', $data['list1']);
            $db->bindValue(':suite_type', $data['list2']);
            $db->execute();
            $rooms = $db->fetchAll();
            return $rooms;
        }

        //////////////////////////////////////

        public function getRoom($id){
            $db = DB::connect()->prepare("SELECT * FROM room WHERE idR = :id");
            $db->bindValue(':id', $id);
            $db->execute();
            $rooms = $db->fetch();
            return $rooms;
        }
        
        public function ReservRoom($data){
            $db = DB::connect()->prepare("INSERT INTO reservation(roomID, userID, DateD, DateF, totale) VALUES (:roomID, :userID, :DateD, :DateF, :total)");
            $db->bindParam(':roomID',$data['idR']);
            $db->bindParam(':userID',$data['idUser']);
            $db->bindParam(':DateD',$data['dated']);
            $db->bindParam(':DateF',$data['datef']);
            $db->bindParam(':total',$data['total']);
            $db->execute();

        }

        public function ReservSuitRoom($data){
            $db = DB::connect()->prepare("INSERT INTO reservation(roomID, userID, DateD, DateF, totale) VALUES (:roomID, :userID, :DateD, :DateF, :total)");
            $db->bindParam(':roomID',$data['idR']);
            $db->bindParam(':userID',$data['idUser']);
            $db->bindParam(':DateD',$data['dated']);
            $db->bindParam(':DateF',$data['datef']);
            $db->bindParam(':total',$data['total']);
            $db->execute();
            // if($db->execute()){
            //     $db = DB::connect()->prepare("SELECT * FROM reservation ORDER BY idRes DESC LIMIT 1");
            //     $db->execute();
            //     $res = $db->fetch();
                
            //     $nbrP = $_POST['nbrPerson'];
            //     die($res .' '. $nbrP) ;
            //     for ($i = 0; $i < $nbrP; $i++) {
            //         $db = DB::connect()->prepare("INSERT INTO guests(nameG, birthday, idReservation, idUser) VALUES (:nameg, :birthday, :idReservation, :idUser)");
            //         $db->bindParam(':nameg',$data['name'][$i]);
            //         $db->bindParam(':birthday',$data['birthday'][$i]);
            //         $db->bindParam(':idReservation',$res['idRes']);
            //         $db->bindParam(':idUser', $_SESSION['user']);
            //         $db->execute();
            //     }
            // }
        }

        static public function addGests($datag){
            try{
                $db = DB::connect()->prepare("INSERT INTO guests(nameG, birthday, idReservation, idUser) VALUES (:nameg, :birth, :idReserv, :idUs)");
                $db->bindParam(':nameg',$datag['name']);
                $db->bindParam(':birth',$datag['birthday']);
                $db->bindParam(':idReserv',$datag['idres']);
                $db->bindParam(':idUs', $datag['idUser']);
                $db->execute();
            }
            catch (PDOException $e)
            {
                return "some fail-messages";
            }
        }

        static public function getidRes(){
            $user = $_SESSION['user'];
            $db = DB::connect()->prepare("SELECT MAX(idRes) FROM reservation WHERE idRes = :idus");
            $db->bindParam(':idus', $user);
            $db->execute();
            $res = $db->fetch();
            return $res;
        }

        public function getAllReservation(){
            $id = $_SESSION['user'];
            $db = DB::connect()->prepare("SELECT reservation.idRes, reservation.DateD, reservation.DateF, reservation.totale, room.typeR, room.type_suitsR  FROM room  inner join reservation  on room.idR = reservation.roomID where reservation.userID = :id");
            $db->bindValue(':id', $id);
            $db->execute();
            $res = $db->fetchAll();
            return $res;
        }

        public function getAllReservationA(){
            $id = $_SESSION['user'];
            $db = DB::connect()->prepare("SELECT  reservation.idRes, user.name, reservation.DateD, reservation.DateF, reservation.totale, room.typeR, room.type_suitsR  FROM room  inner join reservation  on room.idR = reservation.roomID inner join user on reservation.userID = user.idU");
            $db->execute();
            $res = $db->fetchAll();
            return $res;
        }

        public function deleteRservation($id){
            $db = DB::connect()->prepare("DELETE FROM reservation WHERE idRes = :id");
            $db->bindParam(":id",$id);
            if($db->execute()){
                return "ok";
            }else{
                return "error";
            }
        }


        public function UpdateRoom($data){
            // var_dump($data);
            $filename = $data['imageR']['name'];
            $file_sur= 'uploads/'.$filename;
            $file_tmp = $data["imageR"]['tmp_name'];
            move_uploaded_file($file_tmp,$file_sur);

            $db = DB::connect()->prepare("UPDATE room SET imageR = :imageR, typeR = :typeR, type_suitsR = :type_suitsR, numberR = :numberR, capaciteR = :capaciteR, priceR = :priceR WHERE idR = :id");
            $db->bindParam(':id',$data['id']);
            $db->bindParam(':imageR',$filename);
            $db->bindParam(':typeR',$data['typeR']);
            $db->bindParam(':type_suitsR',$data['type_suitsR']);
            $db->bindParam(':numberR',$data['numberR']);
            $db->bindParam(':capaciteR',$data['capaciteR']);
            $db->bindParam(':priceR',$data['priceR']);
            $db->execute();
        }


        
    }