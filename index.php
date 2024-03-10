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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
          
            
        }

        .login-container {
            background-color: transparent;
            padding: 50px;
            border-radius: 8px;
            border-color: black;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 1300px;
        }

        .login-form {
            max-width: 500px;
            margin: 0 auto;
        }

        h2 {
            
            color: white;
        }

        label {
            display: block;
           
            color: white;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
  
<div class="menu">
        <video autoplay loop muted plays-inline class="back-vdo">
            <source src="vdo1.mp4" type="video/mp4">
        </video>
        <div class="login-container">
    <form class="login-form" action="" method="post">
        <table>
          <tr>
            <td>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <h2>Informations de base</h2>
          
            <label for="name">Nom:</label>
            <input type="text" name="n" required>
          
         
            <label for="name">Prenom:</label>
            <input type="text" name="p"  required>
          
          
            <label for="address">Adresse:</label>
            <input type="text" name="a"  required>

          
            <label for="phone">Téléphone:</label>
            <input type="text" name="t"  required>
          
          
            <label for="email">Email:</label>
            <input type="email" name="em"  required>
          
        
          <h2>Compétences</h2>
         
            <label for="skills">Entrez vos compétences, séparées par une virgule:</label>
            <input type="text" name="com"  required>
          
            </td>
            <td>
            <br><br><br><br><br><br><br><br><br><br>
          <h2>Expérience de travail</h2>
         
              <label for="company">Nom de l'entreprise:</label>
              <input type="text" name="e"  required>
            
              <label for="position">Poste occupé:</label>
              <input type="text" name="pos"  required>
           
              <label for="start-date">Date de début:</label>
              <input type="date" name="dd"  required>
           
              <label for="end-date">Date de fin:</label>
              <input type="date" name="df"  required>
              </td>
              <td>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
          <h2>Formation</h2>
         
              <label for="school">Nom de l'école:</label>
              <input type="text" name="eco"  required>
            
              <label for="degree">Diplôme obtenu:</label>
              <input type="text" name="dip"  required>
            
              <label for="start-year">Année:</label>
              <input type="text" name="dt"  required>

          <h2>Vie associative</h2>
            
              <label for="start-year">club:</label>
              <input type="text" name="cl"  required>
            
              <label for="start-year">tache:</label>
              <input type="text" name="t"  required>
              <h2>langues</h2>
              <label for="langue">langues:</label>
              <input type="text" name="lg"  required>
           
              </td>
          </tr>
        </table>
       
        <button type="submit" name="creer">Générer mon CV</button>
      </form>
   
    
      </div>
      </div>

</body>
</html>

  