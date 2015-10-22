<?php
/**
 * Modele des salles 
 *
 * @author s.lafon
 */
class modelRoom extends connection{
    
    public function modelViewRooms(){
        $sql = "SELECT rrsalle.idsalle as id_salle, salle, prix, details, quantite, nomequipement, caracteristiques, idnumerique, nomappareil, detailstechniques from rrsalle
                join rrequipee
                on rrsalle.idsalle=rrequipee.idsalle
                join  rrmobilier
                on rrequipee.idequipement=rrmobilier.idequipement
                join rrnumerique
                on rrsalle.idsalle=rrnumerique.idsalle";
        return $this->db->query($sql); 
    }
    public function modelViewRoom(){
        $sql = "SELECT rrsalle.idsalle as id_salle, salle, prix, details, quantite, nomequipement, caracteristiques, idnumerique, nomappareil, detailstechniques from rrsalle
                join rrequipee
                on rrsalle.idsalle=rrequipee.idsalle
                join  rrmobilier
                on rrequipee.idequipement=rrmobilier.idequipement
                join rrnumerique
                on rrsalle.idsalle=rrnumerique.idsalle 
                WHERE rrsalle.idsalle=1
                
                ";
        return $this->db->query($sql); 
    }
    public function modelAddRoom($postSalle,$postPrix,$postDetails){
        $sql = "
                INSERT INTO rrsalle (idSalle, salle, prix, details) 
                VALUES (Null,'$postSalle','$postPrix', '$postDetails')
                ";
        $this->db->query($sql); 
                var_dump($sql);
    }    
}