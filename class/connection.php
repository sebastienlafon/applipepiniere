<?php
/**
 * Description of connect
 *
 * @author s.lafon
 */
class connection {

/**
     *
     * @var objet de type PDO statement connexion à la DB visible seulement 
     * à l'intérieur de cette classe et des classes filles
     */
    protected $db;
    /**
     *
     * @var string nom d'hôte pour la DB  
     */
    private $host = 'localhost';
    /**
     *
     * @var string nom de la base de données 
     */
    private $dbname = 'rr_v2';
    /**
     *
     * @var string nom d'utilisateur de la DB 
     */
    private $user = 'root';
    /**
     *
     * @var string  mot de passe de l'utilisateur de la DB 
     */
    private $password='root';
    

    public function __construct() 
    {
        $this->connection();
    }
    /**
     * fonction de connexion à la base de données
     * utilise les variables de connexion PDO dans un objet db
     */
    public function connection() 
    {   
        try
        {
            $this->db = new PDO('mysql:host='.$this->host.';
                dbname='.$this->dbname.';charset=utf8', $this->user, $this->password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }      
     }    

}
