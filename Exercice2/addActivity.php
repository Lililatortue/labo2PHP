

<?php 

require "RDV.php";
//request du form 
if ($_SERVER['REQUEST_METHOD']=='POST'){

    $rdv= new rendezVous($_POST['year'],$_POST['month'],$_POST['day'],$_POST['heure']
                 ,$_POST['titre'],$_POST['description']);
    //initialisation dune list pour storer multiple rdv
    if(!isset($_SESSION['rdv'])){
        $_SESSION['rdv']=[];
    }
   
    $_SESSION['rdv'][] = $rdv;
    echo '<pre>';
    print_r($_SESSION['rdv']);
    echo '</pre>';
 echo "succes";
}


?>
