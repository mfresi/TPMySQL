<?php 
class personnage{

    private $_Pseudo;
    private $_Vie;

    public function __construct($_Pseudo){
        $this->_Vie = 100;
        $this->_Pseudo = $_Pseudo; 
        
    }

    public function afficherVie(){

        echo  '<p>la vie est de '.$this->_Vie.'</p>';

    }

    public function afficherPseudo(){
        echo '<p>ton pseudo est '.$this->_Pseudo.'</p>';

    }
}
?>