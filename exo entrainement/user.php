<?php 
class user
{
    //propriété : 
    private $_Nom;
    private $_MDP ='1234';



    //méthodes :
    public function AfficherNom(){

        echo "<p>Le nom est ".$this->_Nom."</p>";

    }
    public function SetNom($NouveauNom){

        $this->_Nom = $NouveauNom;

    }
    public function VerifMDP($LeNom,$LeMDP){

        if($LeNom == $this->_Nom){
            if($LeMDP == $this->_MDP){

                return true;
            }

        } 
                return false;   
    }
    public function SetMDP($NouveauMDP){

        $this->_MDP = $NouveauMDP;
    }
    public function afficher_requet_select($marequete){

        if($larequete == $this->afficher_requet_select($marequete)){

            return $larequete;
        }
        
    }

}

?>