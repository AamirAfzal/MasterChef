<?php include 'head.php';?>
  <body>
  <style>
.mainLogo {
  height: 100px;
  width: 160px;
}
</style>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
           <div style="display:flex;flex-direction:row">
          <a class="navbar-brand" href="index.php" ><img class="mainLogo" src="assets/img/masterchef.png" alt="Logo img"></a>
         
          <a class="navbar-brand img" href="index.php">Master<span>Chef</span></a> 
     
          
          </div>

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.php">HOME</a></li>                  
            <li><a href="menu.php">MENU</a></li>                       
            <li><a href="reservation.php">RESERVATION</a></li>                                
            <li><a href="contactus.php">CONTACT</a></li> 
            <li><a href="aboutus.php">ABOUT US</a></li>   
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->