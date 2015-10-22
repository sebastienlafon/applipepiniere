<?php
require ('autoloader.php');

/**
 * Index va jouer le role de controleur entre les vues et les modèles
 *
 * @author s.lafon
 */
$controllerRoom = new controllerRoom();
$salles = $controllerRoom->controllerViewRooms();
$salle = $controllerRoom->controllerViewRoom();
$formAddRoom = $controllerRoom->controllerFormAddRoom();
$formAddFurniture = $controllerRoom->controllerFormAddFurniture();

?>
    <table>
        <tr>
            <th>LISTE DES SALLES</th>
        </tr>
        <tr>
            <td><?php echo $salles;
             ?></td>
        </tr>
     </table>
    <table>
        <tr>
            <th>UNE SALLE</th>
        </tr>
        <tr>
            <td><?php echo $salle;
            ?></td>
        </tr>
     </table>

<?php // echo $formAddRoom; 

//$controllerRoom->controllerAddRoom();

echo $formAddFurniture;
//gerer duplicate en try avec un if isset ou un 
//$controllerRoom->controllerAddFurniture();