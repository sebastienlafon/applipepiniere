<?php
/**
 * Description of view_salles
 *
 * @author s.lafon
 */
class viewRooms {
    
    public function viewViewRooms($query) {
        $tableau = "";
        while ($resultat = $query->fetch(PDO::FETCH_OBJ)) 
        {      
            $tableau .= //concaténation de contenu
                "<table class='tablesalles'>
                    <caption>Salles</caption>
                    <tr>
                        <th>ID</th>
                        <th>salle</th>
                        <th>Prix</th>
                        <th>détails</th>
                        <th>quantite</th>
                        <th>nomequipement</th>
                        <th>caracteristiques</th>
                        <th>idnumerique</th>
                        <th>nomappareil</th>
                        <th>detailstechniques</th>

                    </tr>
                    <tr>
                        <td>$resultat->id_salle</td>
                        <td>$resultat->salle</td>
                        <td>$resultat->prix €</td>
                        <td>$resultat->details</td>
                        <td>$resultat->quantite</td>
                        <td>$resultat->nomequipement</td>
                        <td>$resultat->caracteristiques</td>
                        <td>$resultat->idnumerique</td>
                        <td>$resultat->nomappareil</td>
                        <td>$resultat->detailstechniques</td>

                    </tr>
                </table>";
        }
    return $tableau;
        
    }
public function viewViewRoom($query) {
        $tableau = "";
        while ($resultat = $query->fetch(PDO::FETCH_OBJ)) 
        {   
            $tableau .= //concaténation de contenu
                "<table class='tablesalles'>
                    <caption>Salle</caption>
                    <tr>
                        <th>ID</th>
                        <th>salle</th>
                        <th>Prix</th>
                        <th>détails</th>
                        <th>quantite</th>
                        <th>nomequipement</th>
                        <th>caracteristiques</th>
                        <th>idnumerique</th>
                        <th>nomappareil</th>
                        <th>detailstechniques</th>
                    </tr>
                    <tr>
                        <td>$resultat->id_salle</td>
                        <td>$resultat->salle</td>
                        <td>$resultat->prix €</td>
                        <td>$resultat->details</td>
                        <td>$resultat->quantite</td>
                        <td>$resultat->nomequipement</td>
                        <td>$resultat->caracteristiques</td>
                        <td>$resultat->idnumerique</td>
                        <td>$resultat->nomappareil</td>
                        <td>$resultat->detailstechniques</td>
                    </tr>
                </table>";
        }
    return $tableau;
        
    }

    public function viewAddRoom() {

        $form .="
                <form method='post' action='index.php'>
                    <p>insertion
                        <label for='salle'>Saisissez un nom de salle</label>
                        <input type='text' name='salle' id='salle' />
                        <label for='Prix'>Saisissez un Prix de salle</label>
                        <input type='text' name='prix' id='prix' />
                        <label for='details'>Saisissez les détails de la salle</label>
                        <input type='textarea' name='details' id='details' />
                    </p>
                        <input type='submit' value='Envoyer' />
                </form> 
                ";
        
        return $form;

        
    }    
}
