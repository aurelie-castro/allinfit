


<div class="apropos">

<div class="reservation" id="reservation">
    <h2>Réservez votre séance</h2>
<form action="#" method="post" id="rdv">
  <div>
  <label for="identifiant" class="label-form">Identifiant:</label>
    <input type="number" name="identifiant" id="identifiant" value="" >

  </div>
  <div>
  <input type="radio" name="sexe" id="femme" value="femme">
    <label for="femme">Une femme</label>
    <input type="radio" name="sexe" id="homme" value="homme">
    <label for="homme">Un homme</label>
    <input type="radio" name="autre" id="autre" value="autre">
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
    </div>


</div>