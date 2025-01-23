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
 function setDure($duretest){
    if($duretest>24 ||$duretest<=0){echo "erreur";}
    $this->dure=$duretest;
}
function setTitre($titre){
    $this -> titre = $titre;
}
function setDescription($description){
    $this -> description = $description;
}
//constructeur
function __construct(){

}


}

?>