<!DOCTYPE html>
<html>
<title>HANT Customs</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/images (1).ico">
<style>
body,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
h1 {font-family: "Oswald"}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    background-color:black;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3,.bgimg-11, .bgimg-5, .bgimg-6, .bgimg-7, .bgimg-12, .bgimg-13, .bgimg4{
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/parallax1.jpg');
    min-height: 100%;
}

.bgimg-11 {
    background-image: url('images/HDRECAmini.jpg');
    min-height: 100%;
}

.bgimg-13
{
    background-image: url('images/bwresmall2.png');
  
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("images/bwre.jpg");
    min-height: 400px;
}
.bgimg-12 {
    background-image: url('images/ourservices.jpg');
    
    
}
.bgimg4{
    
    background-image: url('images/ourservices.jpg');
   
}
/* Third image (Contact) */
.bgimg-3 {
    background-image: url("images/contact.jpeg");
    min-height: 400px;
}
.bgimg-5{
      background-image: url('images/about.jpg');
    min-height: 400px
}

.bgimg-7
{
    background-image: url('images/paintbg.png');
    min-height: 400px
}

.bgimg-6
{
    background-image: url('images/addonbg.png');
    min-height: 400px
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-11 {
        background-attachment: scroll;
    }
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #B22222;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 70%;
}

#myBtn:hover {
  background-color: #555;
}

</style>
<body>
<button class="button button5" onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span> </button>      
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hover-red w3-padding-large"><i class="fa fa-home"></i> HOME</a>
    <a href="aboutus.php" class="w3-bar-item w3-button w3-hover-red w3-padding-large w3-hide-small"><i class="fa fa-envelope"></i> ABOUT</a>
   <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button w3-hover-red" title="More"><i class="fa fa-wrench"></i> OUR SERVICES <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="addons.php" class="w3-bar-item w3-button"><i class="fa fa-plus"></i> ADD ON'S</a>
        <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-paint-brush"></i> PAINT JOB</a>
        <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-recycle"></i> COMPLETE MODIFICATION</a>
      </div>
    </div>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-red w3-hide-small"><i class="fa fa-photo"></i>  GALLERY</a>

      </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="aboutus.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()"><i class="fa fa-envelope"></i>  ABOUT</a>
  <a href="addons.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()"><i class="fa fa-plus"></i>  ADD ON'S</a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()"><i class="fa fa-paint-brush"></i>  PAINT JOB</a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()"><i class="fa fa-recycle"></i>  COMPLETE MODIFICATION</a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large" onclick="toggleFunction()"><i class="fa fa-photo"></i>  GALLERY</a>
</div>

<!-- Container (About Section) -->
<!-- Container (About Section) -->
<div class=" bgimg-5 w3-container w3-padding-64 " id="about">
  <p class="w3-xxlarge w3-center w3-hide-small w3-text-white " >WELCOME&ensp;TO &ensp;<span class="w3-xxlarge w3-text-red w3-wide"><b> HANT  CUSTOMS</b></span></p>
  <p class="w3-xlarge w3-center w3-text-white w3-hide-large w3-hide-medium"><b>ABOUT &ensp;</b><span class="w3-xlarge w3-text-red w3-hide-large w3-hide-medium"><b>US</b></span></p>
<p class="w3-xlarge w3-text-white" style="width:90%;margin-left: auto;margin-right: auto">To all the bike lovers,HANT will take you through journey of customizing your bike from scratch.
  HANT is built to reach out every bike lover who want to customize their bike at affordable price.
  HANT paves a way for the bike lovers to their dream bike.
  We work with professionals from their respective fields to offer you the best quality service.</p>

<!-- Container (About Section QUOTE) -->
<div class="w3-container w3-center">
    <div class="w3-center w3-card-4 " style="width:90%;margin-left: auto;margin-right: auto">
        
    <span class="w3-text-white" style="font-size:100px">❝</span><br>
<p class="w3-text-white" style="margin-top:-60px;margin-left: auto;margin-right: auto;font-size: 22px"><i><b><span style="font-size: 30px" class=" w3-text-red "><b>"</b></span>When i was 19,I saw her for the first time...as soon as i saw her,a phrase started wandering
            in my mind..<span class=" w3-text-red "> "Love at First Sight" </span>,I finally understood how true it was!I imagined myself with her,travelling
            to the places and discovered..She was with me at my every thick and thin.You know what?!She looks amazing,sexyyy 
            and i say loudly that it was the man's best creation ever and yes <span class=" w3-text-red "> I LOVE MY BIKE </span>as heaven.<span style="font-size: 30px" class=" w3-text-red "><b>"</b></span></b></i></p>
            <p style="margin-left:auto;font-size: 22px">-<span class=" w3-text-red "><b>HANT.</b></span>
        
</div>
  

</div>
</div>


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container " id="contact">
  <div class="w3-display-middle">
    <h1 class="w3-jumbo  w3-text-white"><b>CONTACT</b></h1>
  </div>
</div> 

<!-- Container (Contact Section) -->
<div class=" w3-container  w3-padding-64 bgimg4 "  >
<h3 class="w3-center w3-text-white">WHERE WE WORK</h3>
<p class="w3-center w3-text-white"><em>We'd love your feedback!</em></p>
<div class="w3-row w3-padding-32 w3-section">
<div class="w3-col m4 w3-container">
<!-- Add Google Maps -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.266541405296!2d78.53238471411912!3d17.44695218804296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9bc5ca38e01f%3A0x16dbf5fb42ac87a0!2sHANT+Customs!5e0!3m2!1sen!2sin!4v1521368897180" class="w3-round-large " style="width:100%;height:400px;" allowfullscreen></iframe>
</div>
<div class="w3-col m8 w3-text-white w3-panel">
<div class="w3-large w3-text-white w3-margin-bottom">
<span class="w3-xxlarge w3-text-white w3-wide"><b>Visit us</b></span><br>
<i class="fa fa-map-marker fa-fw w3-hover-text-black w3-text-white w3-xlarge w3-margin-right"></i> Malkajgiri<br><br>
<i class="fa fa-phone fa-fw w3-hover-text-black w3-text-white w3-xlarge w3-margin-right"></i> Phone:9652764311<br>
<i class="fa fa-phone fa-fw w3-hover-text-black w3-text-white w3-xlarge w3-margin-right"></i> Phone:8686080395<br>
<i class="fa fa-phone fa-fw w3-hover-text-black w3-text-white w3-xlarge w3-margin-right"></i> Phone:9581482732<br>
<i class="fa fa-phone fa-fw w3-hover-text-black w3-text-white w3-xlarge w3-margin-right"></i> Phone:9949450516<br><br>
<i class="fa fa-envelope fa-fw w3-hover-text-black w3-text-white w3-xlarge w3-margin-right"></i> Email: hantcustoms@gmail.com<br>
</div>
</div>
</div>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64  w3-hover-opacity-off">
    
    <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by HANT customs</p>
</footer>
<script>
    
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</html>