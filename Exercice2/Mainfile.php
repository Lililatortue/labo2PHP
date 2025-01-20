<!DOCTYPE html>
<html>
<head>
<title>Exercice2</title>
<style>th{border:5px solid black;} td{border:5px solid black;height:150px;}</style>
</head>

<body>
    <a href="Mainfile.php?year=<?=($year-1)?>">avant</a>
    <h2>annee</h2>
    <a href="Mainfile.php?year=<?=($year+1)?>">apres </a>

    <a href="Mainfile.php?mois=<?=($mois+1)%12?>">avant</a>
    <h2>mois</h2>
    <a href="Mainfile.php?mois=<?=($mois+1)%12?>">apres </a>
    <?php
    echo "<table style=\"width:100%\">";
    echo "<tr><th>Lundi</th> <th>Mardi</th> <th>Mercredie</th> <th>Jeudi</th> <th>Vendredi</th> <th>Samedi</th> <th>Dimanche</th></tr>";
    for($days=0;$days<=35;){
        echo"<tr>";
        echo"<td>";
        include "calendarday.php";
        $days++;
        echo"</td>";
        echo"<td>";
        include "calendarday.php";
        $days++;
        echo"</td>";
        echo"<td>";
        include "calendarday.php";
        $days++;
        echo"</td>";
        echo"<td>";
        include "calendarday.php";
        $days++;
        echo"</td>";
        echo"<td>";
        include "calendarday.php";
        $days++;
        echo"</td>";
        echo"<td>";
        include "calendarday.php";
        $days++;
        echo"</td>";
        echo"<td>";
        include "calendarday.php";
        $days++;
        echo"</td>";
        echo"</tr>";
             
    }
    echo "</table>";


    ?>

</body>

</html>