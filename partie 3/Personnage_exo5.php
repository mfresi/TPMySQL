<?php 
class personnage{

    private $_Pseudo;
    private $_Vie;
    private $_Valeurattaque;
    private $_id;


    public function __construct($leid){

        $this->_id = $leid;
        
        try {
            $_id = new PDO('mysql:host=localhost; dbname=bddalcool;charset=utf8','root', 'root');

            $LesDonneesBrutesDeLaBdd = $_id->query("SELECT * FROM Personnage WHERE id_Personnage = ".$this->_id."");   

            $TableauDeDonnee = $LesDonneesBrutesDeLaBdd->fetch();
            $this->_Pseudo =  $TableauDeDonnee['Pseudo'];
            $this->_Vie =  $TableauDeDonnee['Vie'];
            $this->_Valeurattaque =  $TableauDeDonnee['Attaque'];

            $LesDonneesBrutesDeLaBdd ->closeCursor();
            }
            catch (Exception $erreur){
                }   

    }

    public function afficherVie(){

        echo  "<p>la vie de ".$this->_Pseudo." est de ".$this->_Vie."</p>";

    }

    public function afficherPseudo(){

        echo '<p>ton pseudo est '.$this->_Pseudo.'</p>';
    }

    public function attaquer($Adversaire){

        echo "<p>".$this->_Pseudo." attaque ".$Adversaire->getSpeudo()."</p>";
        $Adversaire->EncaisserDegat($this->_Valeurattaque);
    }

    public function EncaisserDegat($ValeurDegat){
        
        $this->_Vie = $this->_Vie - $ValeurDegat;
    }

    public function getSpeudo(){

       return  $this->_Pseudo;
    }

    public function getStatPerso(){

       // $this->_Vie = $PV;
        //$this->_Valeurattaque = $degat;

        echo "<p>La vie de ".$this->_Pseudo." est de ".$this->_Vie." points de vie</p>";
        echo "<p>Il a ".$this->_Valeurattaque." d'attaque</p>";
    }
}
