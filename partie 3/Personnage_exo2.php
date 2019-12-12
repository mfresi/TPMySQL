<?php 
class personnage{

    private $_Pseudo;
    private $_Vie;
    private $_Valeurattaque;

    public function __construct(){
        $this->_Vie = 100; 
        
    }

    public function afficherVie(){

        echo  '<p>la vie est de '.$this->_Vie.'</p>';

    }

    public function afficherPseudo(){
        echo '<p>ton pseudo est '.$this->_Pseudo.'</p>';

    }

    public function attaquer($Personnage2){

        $this->_Valeurattaque = 50;
    }

    public function defense($_Valeurattaque){

        $this->_Vie = $_Vie - $this->_Valeurattaque;
    }
}
?>