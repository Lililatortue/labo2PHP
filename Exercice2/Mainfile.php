<?php
//initialisation de l'annee
$date_time = new DateTime('now');
$year = $date_time -> format("Y");


//nombre de jour dans un mois le (int) est une maniere de cast pour le foreach
$jours_du_mois=(int)$date_time ->  format("t");


//plus simple a formater surtout quand il faut changer de moi
$month = $date_time -> format("n");     
function whatMonthIsIt(int $x){
    $month_map=[
            0 => "jan",
            1 => "feb", 
            2 => "mar",
            3 => "avr", 
            4 => "mai",
            5 => "jui", 
            6 => "jul",
            7 => "aout", 
            8 => "sep",
            9 => "oct",
            10 => "nov", 
            11 => "dec",   
    ];
            return $month_map[$x];
    }

    //maniere de savoir le 
    $date = new DateTime($year . "-" . $month . "-01");
    $dayoftheweek= (int)$date->format('N');

?>


<!DOCTYPE html>
<html>
<head>
<title>Exercice2</title>
<style>th{border:5px solid black;} td{border:5px solid black;height:150px;}</style>
</head>

<body>
    
    <a href="Mainfile.php?year=<?=($year-1)?>">avant</a>
    <h2><?php echo $year; ?></h2>
    <a href="Mainfile.php?year=<?=($year+1)?>">apres </a><br>

    <a href="Mainfile.php?mois=<?=($month-1)?>">avant</a>
    <h2><?php echo whatMonthIsIt($month); ?></h2>
    <a href="Mainfile.php?mois=<?=($month+1)?>">apres </a>
    <?php
   echo $dayoftheweek;
   echo "<table style=\"width:100%\">";
   echo "<tr><th>Lundi</th> <th>Mardi</th> <th>Mercredi</th> <th>Jeudi</th> <th>Vendredi</th> <th>Samedi</th> <th>Dimanche</th></tr>";
   //foreach pour chaque jours du mois
  echo "<tr>";
   for($days=1;$days<=$jours_du_mois+$dayoftheweek;$days++){
       
       //les deux if statement permetent de que se soit reflette

       echo"<td>";
       //si le jours de la semaine est = ou non a days ne include pas le script
       if ($dayoftheweek<=$days){
       include "calendarday.php";
       }

       echo"</td>";

       if($days%7==0){echo "</tr><tr>";}
   
   }
   echo "</tr>";
   echo "</table>";


    ?>

</body>

</html>