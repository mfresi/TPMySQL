<?php
class personnage
{

    private $_Pseudo;
    private $_id;
    private $_isAdmin;


    public function __construct($leid, $lenom)
    {
        $this->_id = $leid;
        $this->_Pseudo = $lenom;
        //$this->_isAdmin = $leadmin;
    }

    public function getID()
    {

        return $this->_id;
    }

    public function getNom()
    {

        return $this->_Pseudo;
    }

    public function afficherPseudo()
    {

        echo '<p>Ton pseudo est ' . $this->_Pseudo . '</p>';
        echo '<p>Son id est ' . $this->_id . '</p>';
    }

    public function supprimerPseudo(){

        $this->Pseudo = "";
        $this->_id = "";
    }

    public function getAdmin(){

        return $this->_isAdmin;
    }

    public function afficherAdmin(){

        echo '<p>Le super Admin est '. $this->_isAdmin . '</p>';
    }
}
