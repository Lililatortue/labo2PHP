<!--Endroit inserer une nouvelle tache il sera include dans chaque jour-->
<form action="AddDailyTasks.php" method='post'>
 <label name="titre">Titre:</label><br>
<input type="text" name="titre" ></input><br>
<label name="description">description:</label><br>
<input type="text" name="description"></input><br>
<label name="dure" name="dure">Duree:</label><br>
<input type="number" name='dure'></input><br>
<input type="text"  name="date" hidden value="<?=$current_date?>">
<button type="submit">submit</button>
</form>