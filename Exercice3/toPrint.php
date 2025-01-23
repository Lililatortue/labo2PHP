<?php
require "toFile.php";
session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $file= new file("test");

        $file->writeDailyTaskInFile();
    echo "method reussite";
    }
    else{
        echo "methode non reussite";
    }
?>