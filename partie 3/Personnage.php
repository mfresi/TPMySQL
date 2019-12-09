<?php 
class personnage{

    private $_Pseudo;
    private $_Vie;

    public function __construct(){
        $this->_Vie = 100;
        
    }

    public function afficherVie(){
        echo  '<p>la vie est de '.$this->_Vie.'</p>';

    }
}
?>