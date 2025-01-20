<?php
class day{
    private $activity;
    private $day;
    public function __construct ($day,$number_activity){
        $this->day=$day;
        $this->activity=$number_activity;
    }

    public Function getActivity(){
        return $this->activity;
    }
    public function getDay(){
        return $this->day;
    }
}

?>