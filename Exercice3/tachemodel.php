<?php
class tachemodel{
private $titre;
private $description;
private $dure;

//getter
public function getTitre(){
    return $this->titre;
}
public function getDescription(){
    return $this->description;
}

public function getDure(){
    return $this->dure;
}
//setter

//invariance
private function setDure($duretest){
    if($duretest>24 ||$duretest<=0){echo "erreur";}
    $this->dure=$duretest;
}

//constructeur
function __construct($titre,$description,$dure){
    $this -> titre = $titre;
    $this -> description = $description;
    $this->setDure($dure);
}
}

?>