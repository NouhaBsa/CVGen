<?php 
require('connect.php');
$dsn="mysql:dbname=".base.";host=".server;
try{
    $con=new PDO($dsn,user,password);
}
catch(PDO_Exception $e){

    printf("echec de la connexion: %s\n",$e->getMessage());
    exit();
}
class Manageruser{
  
    private $con;
    public function __construct($con){
        $this->setDb($con);
    }

    public function ajouter(User $user1)
    { 
    $nom=$user1->getnom();
    $prenom=$user1->getprenom();
    $adresse=$user1->getadresse();
    $tel=$user1->gettel();
    $email=$user1->getemail();
    $entre=$user1->getentre();
    $competences=$user1->getcompetences();
    $poste=$user1->getposte();
    $datedeb=$user1->getdatedeb();
    $datefin=$user1->getdatefin();
    $diplome=$user1->getdiplome();
    $ecole=$user1->getecole();
    $date=$user1->getdate();
    $club=$user1->getclub();
    $tache=$user1->gettache();
    $langues=$user1->getlangues();
    $q=$this->con->prepare("insert into user values (null,'$nom','$prenom','$adresse','$tel','$email','$competences','$entre','$poste','$datedeb','$datefin','$diplome','$ecole','$date','$club','$tache','$langues')");
    
    $q->execute();
    

if(!$q->execute()) {
    echo "Erreur lors de l'insertion du CV.";
   
} else {

    header ("Location: choixcv.php");
    exit();
}
}
public function setDb(PDO $con){
    $this->con=$con;
}
}
?>
   