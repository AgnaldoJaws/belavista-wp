
<style>
@font-face {
    font-family: myFirstFont;
    src: url(font/lemon_milk/LemonMilk.otf);
}
div {
    font-family: myFirstFont;
}
 .img-responsive {
    margin: 0 auto;
}
.navbar {
    margin-bottom: 0;
    background-color: #7c9d10;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: black !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}




.space-link-menu {
  margin-right:120px;
}
.navbar {
    border-radius: 0px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #555;
}

.item img {
  width: 100%;
}

/*MEDIA CELULAR*/
@media screen and (max-width: 767px) {
/*  .carousel {
      margin-top: 78%;
  }
  .logo{
    width: 100%;
  }*/
  .img-mobile{

    margin-left: 8%;
  }
}

/*MEDIA TELA MEDIAS E GRANDES*/
@media screen and (min-width: 768px) {

  .space-header{
        margin-bottom: 10%;
  }
  .fixme-front{
    z-index: 4;
    position: absolute;
    width: 100%;
  }
  .img-logo{
    z-index: 5;
    margin-top: 209% !important;
  }

  .img-icon{
    margin-top: 220% !important;
  }
  .carousel-inner {
      z-index: 4;
      position: absolute;
      margin-top: -130px;
      }

  .fixme-front{
    margin-top: 41%;
  }
  #space-section {
    width: 100%;
    height: 600px;
  }
}

 </style>

 <div class="col-md-2 ">
    <img class="img-responsive img-logo fixme-front img-mobile center-block" src="http://localhost:8080/wp-content/uploads/2017/11/logo-sitio-bela-vitsa.png">
 </div>
<div class=" col-md-12">

   <div class="row">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">

     <div class="carousel-inner">
       <div class="item active">
         <img src="http://localhost:8080/wp-content/uploads/2017/11/ave-bela-vista-2.jpg" alt="Los Angeles">
       </div>

       <div class="item">
         <img src="http://localhost:8080/wp-content/uploads/2017/11/abelha-2.jpg" alt="Chicago">
       </div>

       <div class="item">
         <img src="http://localhost:8080/wp-content/uploads/2017/11/venda-vela-vista.jpg" alt="New York">
       </div>

       <div class="item">
         <img src="http://localhost:8080/wp-content/uploads/2017/11/jacu-bela.jpg" alt="New York">
       </div>
     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>

   </div>
   <div class="row">

     <!-- Navigation -->
     <div class="fixme-front">
       <nav class="navbar navbar-inverse fixme ">
       <div class="container-fluid ">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
         </div>
         <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="#sitio">O SÍTIO</a></li>

             <li><a href="#turismo-rural">TURÍSMO RURAL</a></li>

             <li><a href="#agrofloresta">AGROFLORESTA</a></li>

             <li><a href="#apicultura">APICULTURA</a></li>

             <li><a href="#organicos">ORGÂNICOS</a></li>

             <li><a href="#contato">CONTATO</a></li>
           </ul>
         </div>
       </div>
     </nav>
     </div>
    </div>
   <div class="row">
     <div class="col-md-9">

     </div>


   </div>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top">Topo</button>
<div id="space-section"> </div>
<!-- Container (DESTINO Section) -->





<script>
var fixmeTop = $('.fixme').offset().top;       // get initial position of the element

$(window).scroll(function() {                  // assign scroll event listener

var currentScroll = $(window).scrollTop(); // get current position

if (currentScroll >= fixmeTop) {           // apply position: fixed if you
    $('.fixme').css({                      // scroll to that element or below it
        position: 'fixed',
        width: '100%',
        top: '0',
        left: '0'
    });
} else {                                   // apply position: static
    $('.fixme').css({                      // if you scroll above it
        position: 'static'
    });
}

});

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
