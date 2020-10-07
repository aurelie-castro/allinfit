<?php 
    //lire/récuperer des données
     // connexion avec la base de données avec PDO
     $basededonnees = "mysql:host=localhost;dbname=allinfit;charset=utf8";
     $utilisateur = "root";
     $motdepasse = "";
     $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
     $table = "";
 
     // sélection des données
     $requete = "SELECT * FROM sportif";
     // affichage des données avec une nouvelle boucle « foreach »
     $sportifs = $pdo->query($requete);
     foreach($sportifs as $sportif)
     {
         $table .= "<tr><td>" . $sportif['sportif_id']." " . "<td>" . $sportif['sportif_lastname']. " " . "<td>" . $sportif['sportif_firstname'] . " " . "</td></tr>";
     }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des sportifs</title>
</head>
<body>
    <h1>Les premiers sportifs inscrits</h1>
    <table>
        <?= $table; ?> 
    </table>
</body>
</html>