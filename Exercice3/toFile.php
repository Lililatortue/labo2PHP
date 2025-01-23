<?php 
class file{
private static $filename;

function __construct($filename){
    if ($this->filename==null){
        $this->filename=$filename;
    }
}
//permet de ecrire l'objet tache
public function writeDailyTaskInFile(){
    $file=fopen($filename . ".txt", "w")
    foreach($_SESSION['daily_task'] as $date => $daily_task){
        fwrite( $day['date'] . ":\n")
        //aller chercher les objets taches
        $taches= $daily_task->getDailyTask();
        //iterer a travers les taches
        foreach($taches as $tache){
            fwrite("titre :" $tache->getTitre(););
            fwrite("\ndescription :" $tache->getDescription(););
            fwrite("\ndure :" $tache->getDure(););
        }
    }
}

}

?>