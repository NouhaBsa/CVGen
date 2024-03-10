<?php
function chargerClass($classname)
{
    require $classname.'.php';
}
spl_autoload_register("chargerClass");
session_start();

$con = new PDO('mysql:host=localhost;dbname=bd_cv','root','');
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
$manager=new Manageruser($con);

if(isset($_POST["creer"]))
{
    $user1=new User (array(
        "nom"=>$_POST["n"],
        'prenom'=>$_POST["p"],
        'adresse'=>$_POST["a"],
        'email'=>$_POST["em"],
        'tel'=>$_POST["t"],
        'competences'=>$_POST["com"],
        'entre'=>$_POST["e"],
        'poste'=>$_POST["pos"],
        'datedeb'=>$_POST["dd"],
        'datefin'=>$_POST["df"],
        'diplome'=>$_POST["dip"],
        'ecole'=>$_POST["eco"],
        'date'=>$_POST["dt"],
        'club'=>$_POST["cl"],
        'tache'=>$_POST["t"],
        'langues'=>$_POST["lg"]));
    
    $manager->ajouter($user1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <video autoplay loop muted plays-inline class="back-vdo">
        <source src="vdo1.mp4" type="video/mp4">
    </video>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
    <style>
        .back-vdo{
	position: absolute;
    right: 0;
    bottom: 0;
    top: 0;
    left: 0;
    z-index: -1;
}
@media (min-aspect-ratio : 16/9){
            .back-vdo{
                width: 100%;
                height: auto;
            }
        }

        @media (max-aspect-ratio : 16/9){
            .back-vdo{
                width: auto;
                height: 100%;
            }
        }

        body {
            
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column; /* Pour centrer verticalement */
        }

        .image-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 20px; /* Espacement entre la phrase et les images */
        }

        .image-container a {
            margin: 0 10px; /* Espace entre les images */
            text-decoration: none;
            position: relative;
        }

        .image-container a:hover img {
            transform: scale(1.1);
        }

        .phrase {
            font-size: 50px;
            color:beige;
            font-weight: bold;
            margin-bottom: 10px; /* Espacement entre la phrase et les images */
        }

        .image-container a::after {
            
            position: absolute;
            top: -25px; /* Position au-dessus des images */
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-container a:hover::after {
            opacity: 1;
        }
        
    </style>
</head>
<body>
    <h2 class="phrase">Choisissez la template!</h2>
    <div class="image-container">
        <a href="cv.php">
            <img src="image1.png" width="250" height="300">
        </a>
        <a href="cv1.php">
            <img src="image2.png" width="250" height="300">
        </a>
        <a href="cv2.php">
            <img src="image3.png" width="250" height="300">
        </a>
    </div>
</body>
</html>
