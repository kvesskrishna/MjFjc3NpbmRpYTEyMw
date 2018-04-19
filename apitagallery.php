<?php require_once('head.php');

$page="gallery";

?>

<head> <style> 

.gallery_product

{

    margin-bottom: 30px;

}



* {

  box-sizing: border-box;

}



.row > .column {

  padding: 0 8px;

}



.row:after {

  content: "";

  display: table;

  clear: both;

}



.column {

  float: left;

  width: 25%;

}



.modal {

  display: none;

  position: fixed;

  z-index: 1;

  padding-top: 150px;

  left: 0;

  top: 0;

  width: 100%;

  height: 100%;

  overflow: auto;

  background-color: black;

}



/* Modal Content */

.modal-content {

  position: relative;

  background-color: #fefefe;

  margin: auto;

  padding: 0;

  width: 90%;

  max-width: 1200px;

}



/* The Close Button */

.close {

  color:white;

  position: absolute;

  top: 120px;

  right: 25px;

  font-size: 40px;

  font-weight: bold;

}



.close:hover,

.close:focus {

  color: #999;

  text-decoration: none;

  cursor: pointer;

}



.mySlides {

  display: none;

}



.cursor {

  cursor: pointer

}



/* Next & previous buttons */

.prev,

.next {

  cursor: pointer;

  position: absolute;

  top: 50%;

  width: auto;

  padding: 16px;

  margin-top: -50px;

  color: white;

  font-weight: bold;

  font-size: 20px;

  transition: 0.6s ease;

  border-radius: 0 3px 3px 0;

  user-select: none;

  -webkit-user-select: none;

}



/* Position the "next button" to the right */

.next {

  right: 0;

  border-radius: 3px 0 0 3px;

}



/* On hover, add a black background color with a little bit see-through */

.prev:hover,

.next:hover {

  background-color: rgba(0, 0, 0, 0.8);

}



/* Number text (1/3 etc) */

.numbertext {

  color: #f2f2f2;

  font-size: 12px;

  padding: 8px 12px;

  position: absolute;

  top: 0;

}



img {

  margin-bottom: -4px;

}



.caption-container {

  text-align: center;

  background-color: black;

  padding: 2px 16px;

  color: white;

}



.demo {

  opacity: 0.6;

}



.active,

.demo:hover {

  opacity: 1;

}



img.hover-shadow {

  transition: 0.3s

}



.hover-shadow:hover {

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)

}

.button1 {border-radius: 12px;}



.button1:hover {

    background-color: #008CBA;

    color: white;



</style></head>

  <body>

    <div class="body">

      <?php require_once('header.php');?>

      <div role="main" class="main">

        <section class="page-header">

          <div class="container">

            <div class="row">

              <div class="col-md-12">

                <ul class="breadcrumb">

                  <li><a href="home">Home</a></li>

                  <li class="active">Gallery</li>

                </ul>

              </div>

            </div>

            <div class="row">

              <div class="col-md-12">

                <h1>Gallery</h1>

              </div>

            </div>

          </div>

        </section>

        <div class="container">

        <div class="row">

        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h3 class="gallery-title">Apita Job fair</h3>

        </div>

        

        <br/>



            

            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <img src="img/gallery/apitajobmela (1).jpeg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor" alt="">

            </div>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <img src="img/gallery/apitajobmela (2).jpeg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor" alt="">

            </div>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <img src="img/gallery/apitajobmela (3).jpeg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor" alt="">

            </div>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <img src="img/gallery/apitajobmela (4).jpeg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" alt="">

            </div>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <img src="img/gallery/apitajobmela (5).jpeg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor" alt="">

            </div>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <img src="img/gallery/apitajobmela (0).jpeg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor" alt="">

            </div>

        </div>

        <div class="row">



           <div class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <a href="http://www.21cssindia.com/news?topic=14"><button class="button button1">Go to News</button></a>

            </div>

          </div>

    </div>



    <div id="myModal" class="modal">

  <span class="close cursor" onclick="closeModal()">&times;</span>

  <div class="modal-content">



    <div class="mySlides">

      <div class="numbertext">1 / 6</div>

      <img src="img/gallery/apitajobmela (1).jpeg" style="width:100%" alt="">

    </div>



    <div class="mySlides">

      <div class="numbertext">2 / 6</div>

      <img src="img/gallery/apitajobmela (2).jpeg" style="width:100%" alt="">

    </div>





    <div class="mySlides">

      <div class="numbertext">3 / 6</div>

      <img src="img/gallery/apitajobmela (3).jpeg" style="width:100%" alt="">

    </div>

    

    <div class="mySlides">

      <div class="numbertext">4 / 6</div>

      <img src="img/gallery/apitajobmela (4).jpeg" style="width:100%" alt="">

    </div>



     <div class="mySlides">

      <div class="numbertext">5 / 6</div>

      <img src="img/gallery/apitajobmela (5).jpeg" style="width:100%" alt="">

    </div>



    <div class="mySlides">

      <div class="numbertext">6 / 6</div>

      <img src="img/gallery/apitajobmela (0).jpeg" style="width:100%" alt="">

    </div>

    

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

    <a class="next" onclick="plusSlides(1)">&#10095;</a>



    <div class="caption-container">

      <p id="caption"></p>

    </div>

    <div class="column">

      <img class="demo cursor" src="img/gallery/apitajobmela (1).jpeg" style="width:100%" onclick="currentSlide(1)" alt="">

    </div>



    <div class="column">

      <img class="demo cursor" src="img/gallery/apitajobmela (2).jpeg" style="width:100%" onclick="currentSlide(2)" alt="">

    </div>

    

    <div class="column">

      <img class="demo cursor" src="img/gallery/apitajobmela (3).jpeg" style="width:100%" onclick="currentSlide(3)" alt="">

    </div>

    <div class="column">

      <img class="demo cursor" src="img/gallery/apitajobmela (4).jpeg" style="width:100%" onclick="currentSlide(4)" alt="">

    </div>

     <div class="column">

      <img class="demo cursor" src="img/gallery/apitajobmela (5).jpeg" style="width:100%" onclick="currentSlide(4)" alt="">

    </div>

     <div class="column">

      <img class="demo cursor" src="img/gallery/apitajobmela (0).jpeg" style="width:100%" onclick="currentSlide(4)" alt="">

    </div>

  </div>

</div>





               



      <div style="margin-top: 150px;"></div>

      <?php 

      require_once('footer.php');?>

    </div>

    <?php require_once('foot-scripts.php');?>

    



    <script>

function openModal() {

  document.getElementById('myModal').style.display = "block";

}



function closeModal() {

  document.getElementById('myModal').style.display = "none";

}



var slideIndex = 1;

showSlides(slideIndex);



function plusSlides(n) {

  showSlides(slideIndex += n);

}



function currentSlide(n) {

  showSlides(slideIndex = n);

}



function showSlides(n) {

  var i;

  var slides = document.getElementsByClassName("mySlides");

  var dots = document.getElementsByClassName("demo");

  var captionText = document.getElementById("caption");

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

  captionText.innerHTML = dots[slideIndex-1].alt;

}

</script>

  </body>

</html>