<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/app.css">

        <title>Curio Software Development</title>

    </head>
    <body>
        @include('header')
        <main>
            <div class="grid-container">
                <div class="info">
                    <div class="box1">
                        <h3>Rooster</h3>
                    

                    </div>
                    <div class="box2">
                        <h3>indeling van de blokken</h3>
                       
                    </div>
                    <div class="box3">
                        <h3>Versnellen</h3>
                    

                    </div>
                </div>
                <div class="vakken">
                    <div class="boxWIN large">
                        <h3>NATIVE</h3>
                    

                    </div>
                    <div class="boxWEB large ">
                        <h3>WEB Development</h3>
                    

                    </div>
                    <div class="boxPRA large">
                        <h3>PRAKTIJK WERK</h3>
                    

                    </div>
                    <div class="boxPRO large ">
                        <h3>PRAKTIJKONDERSTEUNING</h3>
                    

                    </div>
                    <div class="boxGENE large">
                        <h3>NEDERLANDS/ENGELS/REKENEN</h3>
                    

                    </div>
                
                </div>
                    
                    

                
            </div>

            <!-- <div class="teachers">
                <div class="teacher">
                    <img src="img/br10.jfif" alt="">
                    <h4>Bart Roos </h4>
	                <p>docent WIN/WEB/SLB/CGO</p>
	                <p><a href="mailto:b.roos@curio.nl">b.roos@curio.nl</a></p> 
                </div>
                <div class="teacher">
                    <img src="img/eb89.jpg" alt="">
                    <h4>Elton Boekhoudt</h4>
	                <p>docent WEB/TBZ</p>
	                <p><a href="mailto:e.boekhoudt@curio.nl">e.boekhoudt@curio.nl</a></p>
                </div>
                <div class="teacher">
                    <img src="img/steven.png" alt="">
                    <h4>Steven van Rosendaal</h4>
	                <p>docent PRO/SLB/</p>
	                <p><a href="mailto:s.vanrosendaal@curio.nl">s.vanrosendaal@curio.nl</a></p>
                </div>
                <div class="teacher">
                    <img src="img/ib81.jfif" alt="">
                    <h4>Ine Vermeer </h4>
	                <p>docent WEB/SLB</p>
	                <p><a href="mailto:e.vermeer@curio.nl">e.vermeer@curio.nl</a></p>
                </div>
                <div class="teacher">
                    <img src="img/wicher.png" alt="">
                    <h4>Wicher Hulzenbosch </h4>
	                <p>docent WIN/PRA</p>
	                <p><a href="mailto:w.hulzenbosch@curio.nl">w.hulzenbosch@curio.nl</a></p>
                </div>
                <div class="teacher">
                    <img src="img/michel.png" alt="">
                    <h4>Michel Meeuwesen</h4>
	                <p>docent PRA</p>
	                <p><a href="mailto:m.meeuwesen@curio.nl">m.meeuwesen@curio.nl</a></p>
                </div>
                <div class="teacher">
                    <img src="img/Wiro.jfif" alt="">
                    <h4>Wiro Verdiesen</h4>
                    <p>Docent Rekenen</p>
                    <p><a href="mailto:w.verdiesen@curio.nl">w.verdiesen@curio.nl</a></p>
                </div>
                <div class="teacher">
                    <img src="img/docent10.jfif" alt="">
                    <h4>Vincent Hooft</h4>
                    <p>Docent ALGO</p>
                    <p><a href="mailto:v.hooft@curio.nl">v.hooft@curio.nl</a></p>
                </div>
            </div> -->

            


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="img/docent1.jpg" style="width:100%">
  <div class="text">
    <h4>Bart Roos </h4>
	<p>docent WIN/WEB/SLB/CGO</p>
	<p><a href="mailto:b.roos@curio.nl">b.roos@curio.nl</a></p> 
    </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="img/eb89.jpg" style="width:100%">
  <div class="text">
    <h4>Elton Boekhoudt</h4>
	<p>docent WEB/TBZ</p>
	<p><a href="mailto:e.boekhoudt@curio.nl">e.boekhoudt@curio.nl</a></p>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="img/steven.png" style="width:100%">
  <div class="text">
    <h4>Steven van Rosendaal</h4>
    <p>docent PRO/SLB/</p>
    <p><a href="mailto:s.vanrosendaal@curio.nl">s.vanrosendaal@curio.nl</a></p>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="img/docent4.jpg"  style="width:100%">
  <div class="text">
    <h4>Ine Vermeer </h4>
    <p>docent WEB/SLB</p>
    <p><a href="mailto:e.vermeer@curio.nl">e.vermeer@curio.nl</a></p>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="img/wicher.png" style="width:100%">
  <div class="text">
    <h4>Wicher Hulzenbosch </h4>
    <p>docent WIN/PRA</p>
    <p><a href="mailto:w.hulzenbosch@curio.nl">w.hulzenbosch@curio.nl</a></p>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="img/michel.png" style="width:100%">
  <div class="text">
    <h4>Michel Meeuwesen</h4>
    <p>docent PRA</p>
    <p><a href="mailto:m.meeuwesen@curio.nl">m.meeuwesen@curio.nl</a></p>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="img/Wiro.jfif" style="width:100%">
  <div class="text">
    <h4>Wiro Verdiesen</h4>
    <p>Docent Rekenen</p>
    <p><a href="mailto:w.verdiesen@curio.nl">w.verdiesen@curio.nl</a></p>
  </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="img/docent10.jfif" style="width:100%">
  <div class="text">
    <h4>Vincent Hooft</h4>
    <p>Docent ALGO</p>
    <p><a href="mailto:v.hooft@curio.nl">v.hooft@curio.nl</a></p>
  </div>
</div>




<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span> 
  <span class="dot" onclick="currentSlide(8)"></span> 
  
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
                

        </main>
        @include('footer')    
            
    </body>
</html>
