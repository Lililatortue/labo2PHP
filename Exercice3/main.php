<!--file qui permet au end user de faire sa planification horaire -->
<!-- voici une liste de tache a completer:

-- main.php --
ce fichier permet d'inserer des taches, il montre un horaire
1- calendrier, il faut que nous affichions un horaire, fesons en sorte que au debut sa soit 7 jours      completer  tester
  1.1 gerer les jours et les dates                                                                       completer  tester
2- avoir un boutton qui permet de creer un fichier.txt de l'horaire                                      completer  tester

--formulaire--
il seras interer dans main.php se script permettras de envoyer une requete POST pour inserer une tache 
1- creer le form ----                                                                                    completer   tester

-- tachemodel.php -- 
est la classe qui elle gere les invariance                                                            
1- creer le tache model                                                                                  completer   tester
2- assurer que les invariances sont gere                                                                 completer   tester
3- retourner les erreurs approprie                                                                       non completer tester


--dailytask.php--
class qui pour but de gerer le nombre de tache par jour                                                  
1- creer le tache model                                                                                  completer   tester
2- assurer que les invariances sont gere                                                                 completer   tester
3- retourner les erreurs approprie                                                                       non completer non tester

-- toFile.php --
creer un fichier de l'horaire                                                                             
1- creer le file class                                                                                   completer   non tester
3- retourner les erreurs approprie                                                                       non completer non tester
-->

<!-- Gestion des dates du planificateurs d'horaire-->
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
  $date_picker=$_POST['date_time_picker'];
  $end_date=date('Y-m-d',strtotime($date_picker . ' + 7 days'));
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Exercice2</title>
<style>th{border:5px solid black;} td{border:5px solid black;height:300px;}</style>
</head>

<body>
<!--formulaire pour changer la date -->
<form method='post'>
<label name="date_time_picker">Choose a date</label><br>
<input type="date" name="date_time_picker">
<button type="submit" >submit</button>
</form><br>
<!-- form pour print utilise l'objet toPrint.php-->
<form action="ToPrint.php" method='post'>

<button type="submit" ><h2>print</h2></button>
</form><br><br><br>
<!--make sure that $date_picker est set-->
<?php
  if(isset($date_picker)){
    echo "<h1>Planification d'horaire du $date_picker au  $end_date</h1>";
    echo "<table>";
    //maniere de gerer le nombre de formulaire dynamiquement
    for($i=0;$i<7;$i++){
      echo"<td>";
      //operation pour avoir la date approprie
      $current_date=date('Y-m-d',strtotime($date_picker . " + $i days"));
      echo "<h2>$current_date</h2>";

      include "formulaire.php";
      echo"</td>";
    } 
      echo "</table>";
  }
  else{
      echo "<h1>Please enter a date </h1>";
      }
?>
</body>

</html>