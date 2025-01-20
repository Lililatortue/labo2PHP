<?php
require "dayobject.php";
const month=31;
$day_of_the_month=[];
?>
<!DOCTYPE html>
<html>
<head>
<title>Exercice1</title>
</head>

<body>
    <?php
    echo "<table>";
    echo" <colgroup><col span=\"2\"></colgroup>";
    echo "<tr><th>jours</th> <th>activite</th></tr>";

    //creation du tableau
for($day=0; $day<month; $day++ ){
    $day_of_the_month[$day]=new day($day,rand(0,20));
   
   echo "<tr><td>" . $day_of_the_month[$day]->getDay() . "</td><td>" . $day_of_the_month[$day]->getActivity() . "</td></tr>";
   echo"<br>";
}
echo "</table>";
    //initialisation de total
    $total=0;
    //initialisation de lowest
    $lowest=[$day_of_the_month[0]];
    //initialisation de highest
    $highest=[$day_of_the_month[0]];

    foreach($day_of_the_month as $days){
        //calcul le nombre total dactivite
        $total+= $days->getActivity();

        //si le nombre days->activity est plus petit que lowest reset le array
        if($days->getActivity()<$lowest[0]->getActivity()){
            $lowest=[$days];
        }
        //si le nombre days->activity est egal a lowest
        if($days->getActivity()==$lowest[0]->getActivity()){
            $lowest[]=$days;
        }
        //si le nombre days->activity est plus grand a que highest
        if($days->getActivity()>$highest[0]->getActivity()){
            $highest=[$days];
        }
        //si le nombre days->activity est egal a highest
        if($days->getActivity()==$highest[0]->getActivity()){
            $highest[]=$days;
        }
    }
       echo"Total activity :$total<br>";
       echo "les jours "; foreach($highest as $days){echo $days->getDay() . ",";}; echo " ont le plus d'activite avec " . $days->getActivity() . "</br>";
       echo "les jours "; foreach($lowest as $days){echo $days->getDay() . ",";}; echo " ont le plus d'activite avec " . $days->getActivity();
    ?>

</body>

</html>