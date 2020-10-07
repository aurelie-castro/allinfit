<?php 
    //lire/récuperer des données
     // connexion avec la base de données avec PDO
     $basededonnees = "mysql:host=localhost;dbname=allinfit;charset=utf8";
     $utilisateur = "root";
     $motdepasse = "";
     $pdo = new PDO($basededonnees, $utilisateur, $motdepasse);
     $table = "";
     $titre ="";
 
     // sélection des données
     $requete = "SELECT * FROM sportif ORDER BY sportif_firstname  ";
     // affichage des données avec une nouvelle boucle « foreach »
     $sportifs = $pdo->query($requete);
     foreach($sportifs as $sportif)
     {
        $titre = "<tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Sexe</th><th>Telephone</th><th>Jour de la séance</th><th>Heure de la séance</th></tr>";
        //comment ajouter ma ligne avec les titres ?
         $table .= "<tr><td>" . $sportif['sportif_id']." " . 
         "<td>" . $sportif['sportif_lastname']. " " . 
         "<td>" . $sportif['sportif_firstname'] . " " . 
         "<td>" . $sportif['sexe'] . " " . 
         "<td>" . $sportif['telephone'] . " " . 
         "<td>" . $sportif['jour_seance'] . " " . 
         "<td>" . $sportif['heure_seance'] . " " . 
         "</td></tr>";
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