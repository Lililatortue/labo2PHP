<?php 
session_start(); //pour stoquer les cookies/donnés de RDV quand on reload

class rendezVous
{
    //Constructors
    private $anne;
    private $mois;
    private $jour;
    private $heure;
    private $titre;
    private $description;

    function __construct($anne,$mois,$jour,$heure,$titre,$description)
    {
        $this -> anne = $anne;
        $this -> mois = $mois;
        $this -> jour = $jour;
        $this -> heure = $heure;
        $this -> titre = $titre;
        $this -> description = $description;
    }

    //Methodes
    public function getAnne()
    {  return $this -> anne;  }
    public function getMois()
    {  return $this -> mois; }
    public function getJour()
    {  return $this -> jour;  }
    public function getHeure()
    {  return $this -> heure;  }
    public function getTitre()
    {  return $this -> titre; }
    public function getDescription()
    {  return $this -> description;  }
}

?>
