<?php 
class personnage{

    private $_Pseudo;
    private $_Vie;
    private $_Valeurattaque;
    private $_id;
    private $_ValeurSoin;


    public function __construct($leid){

        $this->_id = $leid;
        
        try {
            $_id = new PDO('mysql:host=192.168.65.195; dbname=Exercice_php_partie3;charset=utf8','matmat', 'matmat');

            $LesDonneesBrutesDeLaBdd = $_id->query("SELECT * FROM Personnage WHERE id_Personnage = ".$this->_id."");   

            $TableauDeDonnee = $LesDonneesBrutesDeLaBdd ->fetch();
            $this->_Pseudo =  $TableauDeDonnee['Pseudo'];
            $this->_Vie =  $TableauDeDonnee['Vie'];
            $this->_Valeurattaque =  $TableauDeDonnee['Attaque'];
            $this->_ValeurSoin = 150;


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
        
        $_id = new PDO('mysql:host=192.168.65.195; dbname=Exercice_php_partie3;charset=utf8','matmat', 'matmat');
        $LesDonneesBrutesDeLaBdd = $_id->query("UPDATE Personnage SET Personnage.Vie = Personnage.Vie - ".$this->_Valeurattaque." WHERE id_Personnage = ".$this->_id."");
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

    public function soigner($Soin){
        
        $_id = new PDO('mysql:host=192.168.65.195; dbname=Exercice_php_partie3;charset=utf8','matmat', 'matmat');
        $LesDonneesBrutesDeLaBdd = $_id->query("UPDATE Personnage SET Personnage.Vie = ".$this->_ValeurSoin." WHERE id_Personnage = ".$this->_id."");
        $this->_Vie = $Soin;
    }

    public function getSoin(){

        echo "<p>Apres etre soigne la vie de ".$this->_Pseudo." est de ".$this->_Vie." points de vie.</p>";
    }
}
