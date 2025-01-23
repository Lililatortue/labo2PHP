<?php 
require "DailyTask.php";
require "tachemodel.php";
class file{
private static $filename;

function __construct($filename){
    if (self::$filename==null){
        self::$filename=$filename;
    }
}
//permet de ecrire l'objet tache
public function writeDailyTaskInFile(){
    if(isset($_SESSION['task_list'])){

    $file=fopen(self::$filename . ".txt", "w");
                                    //en gros tu prends chaque key et tu vas chercher leur value
    foreach($_SESSION['task_list'] as $date => $daily_task){
       fwrite( $file, " " . $date . ":\n\n");
        //aller chercher les objets taches
        $taches= $daily_task->getDailyTask();
        //iterer a travers les taches
        foreach($taches as $tache){
            fwrite($file,"\ttitre :" . $tache->getTitre());
            fwrite($file,"\n\tdescription :" .  $tache->getDescription());
            fwrite($file,"\n\tdure :" . $tache->getDure() . "\n\n");
        }
    }
    fclose($file);
    }
    else{
        echo "session is null please create task";
    }
}

}

?>