<?php 
class personnage{

    private $_Pseudo;
    private $_Vie;
    private $_Valeurattaque;


    public function __construct($_Pseudo){
        $this->_Vie = 100;
        $this->_Pseudo = $_Pseudo;
        $this->_Valeurattaque = 50;   
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

    public function StatPerso($PV,$degat){

        $this->_Vie = $PV;
        $this->_Valeurattaque = $degat;

        echo "<p>La vie de ".$this->_Pseudo." est de ".$PV." points de vie</p>";
        echo "<p>Il a ".$degat." d'attaque</p>";
    }
}
?>