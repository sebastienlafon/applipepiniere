<?php
/**
 * Description of controllerRoom
 *
 * @author s.lafon
 */
class controllerRoom {
    
    public function controllerViewRooms(){
        $this->modelRoom = new modelRoom();           
        $query = $this->modelRoom->modelViewRooms();
        $this->viewRooms= new viewRooms();
        return $this->viewRooms->viewViewRooms($query);
    }
    public function controllerViewRoom(){
        $this->modelRoom = new modelRoom();           
        $query = $this->modelRoom->modelViewRoom();
        $this->viewRooms= new viewRooms();
        return $this->viewRooms->viewViewRoom($query);
    }
    public function controllerFormAddRoom(){
        $this->viewRooms= new viewRooms();
        return $this->viewRooms->viewAddRoom();
    }    
    public function controllerAddRoom() {
        $postSalle = $_POST['salle'];
        $postPrix = $_POST['prix'];
        $postDetails =$_POST['details'];
        if (isset($postSalle)){
            $this->modelRoom = new modelRoom();           
            $this->modelRoom->modelAddRoom($postSalle,$postPrix,$postDetails);
        }
        else if(empty($postsalle)){
            echo 'entrez vos informations de salle avant de valider';
        }
    }
    public function controllerFormAddFurniture(){
        $this->viewRooms= new viewRooms();
        return $this->viewRooms->viewAddfurniture();
    }
        public function controllerAddFurniture() {

            $oldidequipement = mysql_insert_id();
            $idequipement = 3;
            $nomEquipement = $_POST['nomEquipement'];
            $caracteristiques = $_POST['caracteristiques'];
            $quantite =$_POST['quantite'];
            if (isset($nomEquipement)){
                $this->modelRoom = new modelRoom();           
                $this->modelRoom->modelAddFurniture
                ($idequipement, $nomEquipement, $caracteristiques, $quantite);
            }
        }
}
