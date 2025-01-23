<?php
require "DailyTask.php";
require "tachemodel.php";
class filereader{

private static $file;
//singleton
function __construct($filename){
    if(self::$file==null){
       self::$file=$filename;
    }
}
//bon fait une maniere non modulaire pour lire le fichier
    public function Readfile(){
    session_start();
    //overwrite previous data intentionnaly
    $_SESSION['task_list']=[];

    $reader=fopen(self::$file,"r");
    while(!feof($reader)){
        $input=fgets($reader);
        
            if(strpos($input,"Date :")){
                $daily_task= new dailyTask(substr($input,7));
               }
                          
            elseif(strpos($input,"tache")){$tache = new tachemodel();} 
            elseif(strpos($input,"titre :")){$tache->setTitre(substr($input,8));}
            elseif(strpos($input,"description")){$tache->setDescription(substr($input,14));}
            elseif(strpos($input,"dure")){
                $tache->setDure(substr($input,7));
                $daily_task->addTask($tache);
                $_SESSION['task_list'][$daily_task->getDate()]=$daily_task;
            }
           
        }
        echo "succes";
        }
    }

?>