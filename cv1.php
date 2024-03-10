<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CV</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<style>
.container {
    max-width : 650px;
    margin : 0 auto;
    padding : 20px;
    display : flex;
    justify-content : space-between;
}
.body{
    display : flex;
    float : center;
}
.leftpannel {
    float : left;
    width : 40%;
    display : flex;
    padding: 40px;
    max-width : 350px;


}
.rightpannel {
    float: right;
    width: 60%;
    background-color: #fff;
    padding: 40px;
    border-radius: 0 5px 5px 0;
}
.info {
    background-color:brown;
    color: #fff;
    padding: 20px;
    border-radius: 5px 0 0 5px;
    box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
}
h1 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
}
h2 {
    color: black;
    font-size: 20px;
    margin-top: 20px;
    margin-bottom: 10px;
}
p {
    color: withe;
    font-size: 16px;
    margin-bottom: 5px;
}
ul {
    margin-top: 0;
    margin-bottom: 10px;
}
ul li {
    list-style-type: none;
}
.btna {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    float: center;
    display: flex;
}
.btna:hover {
    background-color: #0056b3;
}

.btn{
    float: center;
    display: flex;
}
@page {
    size: A4;
    margin: 0;
}
@media print {
    body {
        margin: 0;
        padding: 20px;
    }
}
.btna{
    color: white;
    border-radius: 5px;
    align-items: center;
    background-color: #007bff;
    width: 550px; 
    height: 50px;
    margin : 50px 50px 50px 50px;
    margin-left: 690px;
    justify-content: center;
}
</style>
</head>

<body>
<page size='A4'>
<div class="container">
    <div class="leftpannel">
    
    <div class="info">
        <?php
        $dsn = 'mysql:host=localhost;dbname=bd_cv';
        $username = 'root';
        $password = '';

        try {
            $dbh = new PDO($dsn, $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            exit();
        }

        $stmt = $dbh->query('SELECT * FROM user ORDER BY id DESC LIMIT 1');
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<h2> Contact </h2>";
            echo "<div class='cv'>";
            echo "<p>Adresse : {$user['adresse']}</p>";
            echo "<p>Email : {$user['email']}</p>";
            echo "<p>Téléphone : {$user['tel']}</p>";
            ?>
        </div>
        <div class="cv">
                <?php

            // Compétences
            echo "<h2>Compétences :</h2>";
            echo "<ul>";
            foreach (explode(',', $user['competences']) as $competence) {
                echo "<li>$competence</li>";
            }
            echo "</ul>";
            // Langues
            echo "<h2>Langues :</h2>";
            echo "<ul>";
            foreach (explode(',', $user['langues']) as $langue) {
                echo "<li>$langue</li>";
            }
            ?>
        </div>
    </div>
    <div class="rightpannel">
            <?php
            echo "<h1>{$user['prenom']} {$user['nom']}</h1>";
            // Expérience professionnelle
            echo "<h2>Expérience professionnelle :</h2>";
            echo "<p>nom de l'entreprise: {$user['nomentre']}</p>";
            echo "<p>votre poste: {$user['poste']}</p>";
            echo "<p>date de debut : {$user['date_deb']}</p>";
            echo "<p>date de debut: {$user['date_fin']}</p>";


            // Formations
            echo "<h2>Formation :</h2>";
            echo "<p>diplome: {$user['diplome']}</p>";
            echo "<p>nom de l'etablissement: {$user['ecole']}</p>";
            echo "<p>date de diplome: {$user['date']}</p>";
            
             // vie associative
             echo "<h2> vie associative:</h2>";
             echo "<p>nom du club: {$user['club']}</p>";
             echo "<p>tache: {$user['tache']}</p>";
             echo "</ul>";

            echo "</div>";
        } else {
            echo "<p>Aucun utilisateur trouvé.</p>";
        }
        ?>
    </div>
</page>
</div>
<div class="btn">
<button class="btna" onclick="downloadPDF()" class="pdf">Télécharger PDF</button>
</div>
<script>
function downloadPDF() {
    var container = document.querySelector('.container');
    html2pdf(container);
}
</script>
</body>
</html>