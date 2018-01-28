<div class="container" >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
  <div class="container-fluid">
  
  
  
   
   
  
<a class="navbar-brand" href="index.php">
    <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/135817-200.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Champions League
  </a>
   
   <div>

    <ul class="navbar-nav" id="mynav">
     <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
	 
	 
     <li class="nav-item"><a class="nav-link" href="kontakt.php">Contact</a></li>
	 
	 <ul class="nav navbar-nav navbar-right">

        <?php

        session_start();

        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) { 

            ?>

            <li>
	 <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
	 
	 
                <?php

        } else {

            ?>
	 
	 
     <li class="nav-item"><a class="nav-link" href="registracija.php">Register</a></li>
	 
	 
	 <li class="nav-item"><a class="nav-link" href="prijava.php">Log in</a></li>
	 
	 <?php

        } 

        ?>

        </ul>
	 
	 
    </ul>
   </div>

   
  </div>
 </nav>﻿
 </div>
 