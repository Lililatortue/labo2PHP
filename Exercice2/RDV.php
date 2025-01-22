<?php 
session_start();
class rendezVous{
    private $anne;
    private $moi;
    private $jour;
    private $heure;    
    private $titre;
    private $description;

    function __construct($anne,$moi,$jour,$heure,$titre,$description){
        $this -> anne = $anne;
        $this -> moi = $moi;
        $this -> jour = $jour;
        $this -> heure = $heure;
        $this -> titre = $titre;
        $this -> description = $description;
    }
    public function getAnne(){
        return $this -> anne;
    }
    public function getMoi(){
        return $this -> moi;
    }
    public function getJour(){
        return $this -> jour;
    }
    public function getHeure(){
        return $this -> heure;
    }
    public function getTitre(){
        return $this -> titre;
    }
    public function getDescription(){
        return $this -> description;
    }
}

?>