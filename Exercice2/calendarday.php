
<!--activity form-->

<form action="addActivity.php" method="POST">
    <label name="titre">Titre</label>
    <input type="text" name="titre"></input>
    <label name="description">Description</label>
    <input type="text" name="description"></input>
    <label name="heure">heure</label>
    <input type="text" name="heure"></input>
                    <!-- pas envie de parse un string-->
    <input type="text" name="year" hidden value="<?=$year?>">
    <input type="text" name="month" hidden value="<?=$month?>">
    <input type="text" name="day" hidden value="<?=$days?>">
    <button type="submit">Entrez </button> 
</form>
<ul><?php
    if(isset($_SESSION['rdv'])) {
        foreach($_SESSION['rdv'] as $rdv){
                    // instance of est une maniere de check si la variable est du meme type que la classe
            if($rdv instanceof rendezVous 
                    && $rdv->getAnne() == $year 
                    && $rdv->getMoi() == $month 
                    && $rdv->getJour() == $days){
                echo "<li> Titre: " . $rdv->getTitre() . "<br> Description: " . $rdv->getDescription() . "<br> heure :" .  $rdv->getHeure(). "</li>";
            }

        }
    }

?>
</ul>