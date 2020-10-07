<?php 

try {

$message = ""; 
if(isset($_POST["sexe"], $_POST["nom"], $_POST["prenom"], $_POST["telephone"], $_POST["jour"],$_POST["heure"]))
    
    {
    // si il ne contient que des lettresn et au min 3
    if(preg_match("/^[a-zéèêë]{3,}$/i", $_POST["nom"])> 0) //comment rajouter la condition à d'autres post?

        {

    $basededonnees = "mysql:host=localhost;dbname=allinfit;charset=utf8";
    $utilisateur = "root";
    $motdepasse = "";
    $pdo = new PDO($basededonnees, $utilisateur, $motdepasse, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $requete = "INSERT INTO sportif (sportif_lastname, sportif_firstname, sexe, telephone, jour_seance, heure_seance) VALUES (:nom, :prenom, :sexe, :telephone, :jour, :heure)";
        $objet = $pdo->prepare($requete);
        $objet->execute(array(
            ":nom" => trim($_POST["nom"]),
            ":prenom" => trim($_POST["prenom"]),
            ":sexe" => trim($_POST["sexe"]),
            ":telephone" => trim($_POST["telephone"]),
            ":jour" => trim($_POST["jour"]),
            ":heure" => trim($_POST["heure"])  

        ));
    } 
    else 
        {
        $message = "Erreur : veuillez ne pas utiliser de caractères spéciaux et entrer vos données entièrement";
   //comment recuperer ce message d'erreur dans mon cas ?
    }        
    
}
}
catch(PDOException $e)
{
$message .= $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>S'inscrire à une séance</h1>
    <p><a href="read.php">Voir mes sportifs</a></p>
    <form action="#" method="post" id="rdv">
  <div>
  <input type="radio" name="sexe" id="femme" value="femme">
    <label for="femme">Une femme</label>
    <input type="radio" name="sexe" id="homme" value="homme">
    <label for="homme">Un homme</label>
    <input type="radio" name="sexe" id="autre" value="autre">
    <label for="autre">Je ne souhaite pas le préciser</label>
  </div>
<div>   
<label for="nom" class="label-form">Nom:</label>
    <input type="text" name="nom" id="nom" value="" required>
    </div> 
    <div>
    <label for="prenom" class="label-form">Prénom:</label>
    <input type="text" name="prenom" id="prenom" value="" required>
    </div>
    <div>
    <label for="telephone" class="label-form">Numéro de téléphone:</label>
    <input type="number" name="telephone" id="telephone" value="" required>
    </div>
    <div>
    <label for="jour">Choisissez le jour de la séance:</label>
        <select name="jour" id="jour">
            <option value="lundi">Lundi</option>
            <option value="mardi">Mardi</option>
            <option value="mercredi">Mercredi</option>
            <option value="jeudi">Jeudi</option>
            <option value="vendredi">Vendredi</option>
            <option value="samedi">Samedi</option>
        </select>
    </div>
    <label for="heure">Choisissez l'heure de la séance:</label>
        <select name="heure" id="heure">
            <option value="18h">18h </option>
            <option value="20h30">20h:30</option>
            <option value="22h">22h</option>
  
        </select>
    </div>
    <input type="reset" value="Effacer" id="effacer">
    <input type="submit" value="Envoyer" id="envoyer">
    </form>
    <p style="color:red"><?= $message; ?> </p>
</body>
</html>