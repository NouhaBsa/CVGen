<?php

require("connect.php");

function chargerClass($classname)
{
    require $classname.'.php';
}
spl_autoload_register("chargerClass");
session_start();
$conn = new PDO('mysql:host=localhost;dbname=bd_cv;', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$manager = new Logs ($conn); 
if (isset($_POST['connexion'])) {
    $donnees = array(
        'mail'=>$_POST['u'],
        'mdp'=>$_POST['p']
    );
        
$user = new Log($donnees);
$manager->addUser($user , $conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: transparent;
            padding: 50px;
            border-radius: 8px;
            border-color: black;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form {
            max-width: 300px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: white;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
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
        <form class="login-form" method="post">
            <h2>Login</h2>
            <label for="username">mail d'utilisateur:</label>
            <input type="text" name="u" required>

            <label for="password">mot de passe:</label>
            <input type="password" name="p" required>

            <button type="submit" name="connexion">se connecter</button>
        </form>
    </div>
</div>
</body>
</html>
