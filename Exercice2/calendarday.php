
<!--activity form-->
<form action="addActivity.php" method="Post">
    <label name="titre">Titre</label>
    <input type="text" name="titre"></input>
    <label name="description">Description</label>
    <input type="text" name="description"></input>
    <label name="heure">heure</label>
    <input type="text" name="heure"></input>
    <input type="text" name="date" hidden value="<?=$mois . "-" . $days . "-" . $year ?>">
    <button type="submit">Entrez </button> 
</form>