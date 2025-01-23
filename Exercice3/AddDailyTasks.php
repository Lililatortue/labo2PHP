<?php 

require "tachemodel.php" ;
require "DailyTask.php";
session_start();
echo "Request method: " . $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(!isset($_SESSION['task_list'])){
        $_SESSION['task_list']=[];
    }

    //creation de la tache model
    $tache= new tachemodel();
    $tache->setTitre($_POST['titre']);
    $tache->setDescription($_POST['description']);
    $tache->setDure($_POST['dure']);
    //si la clee existe pas on initialise les objets necessaire
    if(!isset($_SESSION['task_list'][$_POST['date']])){
        $daily_tasks= new dailyTask($_POST['date']);
        $daily_tasks->addTask($tache);
        $_SESSION['task_list'][$_POST['date']]=$daily_tasks;
    }
    else{
        //si la date existe il faut prendre lobjet et rajouter la tache dedans 
        //il est important de le faire car sans la classe dailytask nous 
        //ne pouvons pas verifier combien de tache et la duree total des taches 
        $daily_tasks = $_SESSION['task_list'][$_POST['date']];
        $daily_tasks->addTask($tache);
        $_SESSION['task_list'][$_POST['date']] = $daily_tasks;
    }

}
else{
    echo "something";
}
echo "<pre>";
echo print_r($_SESSION['task_list']);
echo "</pre>"

?>