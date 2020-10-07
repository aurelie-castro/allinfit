<div class="contact-page">

<div class="contact-image">
    <img src="public/images/contact.jpg" alt="Image de contact" id="image-contact">
        <div class="contact-text">
            <h2 class="titre-contact">CONTACTEZ-NOUS</h2>
            <p>
            Besoin de nous poser une question, d'avoir un 
            renseignement concernant nos séances ou <br>
            de nous transmettre une remarque ? <br>
            Différents moyens de contcts sont à votre disposition.
            </p>
        </div>
</div>

<div class="contact-info"> 
    <div>
        <h2>Via téléphone</h2>
        <p>
            Appelez notre service client au <br>+ 32 478 12 32 54 <br>
            Du lundi au samedi
            De 10h à 20h
        </p>
    </div>
    <div>
        <h2>Via email</h2>
        <p>
            Envoyez-nous un email à l'adresse suivante : allinfit@gmail.com . <br>
            Un membre de l'équipe vous répondra dans les plus brefs délais.
        </p>
    </div>
    <div>
        <h2>Via le formulaire</h2>
        <p>Laissez votre message via le formulaire de contact. <br>
        Vous serez recontacté dans la journée !
    </p>
    <button id="btn">Le formulaire</button>
    </div>
</div>
    <div class="formulaire" id="formulaire">
        <h2>Laissez-nous votre message</h2>
    <form action="#" method="post" id="form">
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
        <label for="message" class="label-form">Votre message:</label>
        <input type="text" maxlenght="500" id="message-box" required>
        </div>
        <input type="reset" value="Effacer" id="effacer">
        <input type="submit" value="Envoyer" id="envoyer">
        </form>
        </div>
<div class="visite">
    <h2>Visitez-nous</h2>
</div>
<div class="i-frame">
        <p>Rue Gaucheret 88, 1030 Schaerbeek <br>
            Ouvert du lundi au dimanche <br>
            De 9h à 18h <br>
            Uniquement sur RDV <br>
        </p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.235431072695!2d4.358573615907339!3d50.863841065372135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c37b0b18e0ab%3A0xa7dcedc9c29a0d35!2sInterface3%20Asbl!5e0!3m2!1sen!2sbe!4v1601987665801!5m2!1sen!2sbe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>   
</div>

<script>
var formulaire = document.getElementById("formulaire");
var btn = document.getElementById("btn");

btn.addEventListener("click", function (e) {
    e.preventDefault();
    
    if (formulaire.style.display != "block") {
        formulaire.style.display ="block";
    } else {
        formulaire.style.display ="none"; 
    }

  });

</script>