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
        
    
    
   
    }
    
}
