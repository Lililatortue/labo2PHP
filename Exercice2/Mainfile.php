<?php
require "RDV.php";

//initialisation de l'annee
$year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');

//plus simple a formater surtout quand il faut changer de moi
$month = isset($_GET['month'])? $_GET['month'] : date('N');   
  
function whatMonthIsIt(int $x){
    $month_map=[
            1 => "jan",
            2 => "feb", 
            3 => "mar",
            4 => "avr", 
            5 => "mai",
            6 => "jui", 
            7 => "jul",
            8 => "aout", 
            9 => "sep",
            10 => "oct",
            11 => "nov", 
            12 => "dec",   
    ];
            return $month_map[$x];
    }

    //maniere de savoir le 
    $date = new DateTime($year . "-" . $month . "-01");
    //savoir le moi commence quelle jours
    $dayoftheweek= (int)$date->format('N');
    //savoir le moi a combien de jours
    $jours_du_mois=(int)$date ->  format("t");

    //fonction pour naviguer les mois comme invarience 
    //ne peux jamais etre en dessous de 1 ou au dessous de 12
    function navigateMonth(int $x, $operation){
        if($operation=="-"){
            //reset la boucle si x==1
            if($x==1){return $x=12;}
            return --$x;}
        if($operation=="+"){
            //reset a 1 si la x = 12
            if($x==12){return $x=1;}
            return ++$x;}
    }
?>


<!DOCTYPE html>
<html>
<head>
<title>Exercice2</title>
<style>th{border:5px solid black;} td{border:5px solid black;height:300px;}</style>
</head>

<body>
        <!--bon apres 45min j'ai enfin trouver pourquoi sa marchait pas
            le dernier guillemets devait etre apres le < ?$month? >-->
    <a href="Mainfile.php?year=<?=$year-1?>&month=<?=$month?>">avant</a>
    <h2><?php echo $year; ?></h2>
    <a href="Mainfile.php?year=<?=$year+1?>&month=<?=$month?>">apres </a><br>

    <a href="Mainfile.php?year=<?=$year?>&month=<?=navigateMonth($month,"-")?>">avant</a>
    <h2><?php echo whatmonthIsIt($month); ?></h2>
    <a href="Mainfile.php?year=<?=$year?>&month=<?=navigateMonth($month,"+")?>">apres </a>
                            <!--la table pour le calendrier -->
    <?php
    echo "<table style=\"width:100%\">";
    echo "<tr><th>Lundi</th> <th>Mardi</th> <th>Mercredi</th> <th>Jeudi</th> <th>Vendredi</th> <th>Samedi</th> <th>Dimanche</th></tr>";
    echo "<tr>";
   for($days=1;$days<$jours_du_mois+$dayoftheweek;$days++){
       
       //les deux if statement permetent de que se soit reflette

       echo"<td>";
       //si le jours de la semaine est = ou non a days ne include pas le script
       if ($dayoftheweek<=$days){
        //mettre en gras les samedi et dimanche
       if($days%7==6||$days%7==0){echo "<strong>";}
       echo "<h4>Day :" . $days-$dayoftheweek+1 . "</h4>";
       include "calendarday.php"; 
       if($days%7==6||$days%7==0){echo "</strong>";}
       }

       echo"</td>";

       if($days%7==0){echo "</tr><tr>";}
   
   }
   echo "</tr>";
   echo "</table>";

?>

</body>

</html>