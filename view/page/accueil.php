
<div class="apropos">
<div class="sliderimage">
<div class="coteDroit">
<h2>Accueil</h2>
</div>
<div id="slider">
        <img src="public/images/image1.jpg" alt="La forêt de peupliers" id="slide">
        <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
    </div>
    </div>
<script>
var slide = new Array(
    "public/images/image1.jpg", 
    "public/images/image2.jpg", 
    "public/images/image3.jpg", 
    "public/images/image4.jpg");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}

</script>

<br>
<div class="cards-clic">
    <a href="url"><div class="card-clic">card1</div></a>
    <a href="url"><div class="card-clic">card2</div></a>
    <a href=""><div class="card-clic">card3</div></a>
</div>
</div>