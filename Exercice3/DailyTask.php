<!-- manage les tache il s'assure que seul trois tache peuvent etre attribuer a une journee-->

<?php

class dailyTask{
    private $daily_task=[];
    private $date;
    function __constructor($date){
        $this->date=$date;
    }
// deux invariant a verifier:
    //-pas plus que 3 taches par jour
    private function check_dailytask(){
        //assurer qu'il naie pas plus que 3 tache par jour
        if($this->daily_task==null){return true;}
        if(count($this->daily_task)>=3){return false;}
        else{return true;}
    }
    //-le nombre heure total par tache ne peux pas exceder 24heures
    private function check_duration(tachemodel $nouvelle_tache){
        $total_time=$nouvelle_tache->getDure();
        if($this->daily_task!=null){
            foreach($this->daily_task as $task){
                if ($task !== null) { 
                    $total_time += $task->getDure();
                }
            }
        }
        if($total_time>24){return false;}
        else{return true;}
    }

    //setters
    public function addTask(tachemodel $tache){
    if($this->check_dailytask() && $this->check_duration($tache)){
        $this->daily_task[]=$tache;
    }
    }
    //getter
    public function getDailyTask(){
            return $this->daily_task;
    }
    public function getDate(){
        return $this->date;
    }
}
?>