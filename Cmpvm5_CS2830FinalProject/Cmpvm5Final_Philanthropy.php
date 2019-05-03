<?php

	if(!session_start()) {
		header("Location: Cmpvm5Final_Error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
?>
<!DOCTYPE html>
<!--
    Carolyn Perniciaro
    cmpvm5
    12/7/18
-->

<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <title>Final Project</title>
        
<!--        Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
       <link rel="stylesheet" href="Cmpvm5Final_Stylesheet1.css">
        
        <script>
            
            function toggle(){
                <?php
                    if($loggedIn){
                        echo "document.getElementById('logout').classList.toggle('d-none');document.getElementById('login').classList.add('d-none') "; 
                    }
                    else {
                        echo "document.getElementById('login').classList.remove('d-none');document.getElementById('logout').classList.add('d-none') ";
                    }
                ?> 
            }
            
        </script>
    </head>
    
    <body onload="toggle()">
        <?php
            include("navbar.php");
        ?>
        
        <h1 class="h1">Alpha Chi Omega: Philanthropy</h1>
        <img class ="AXOlogo" src="AXO_logo.png" alt="AXO">
        
        <div class="wrapper a">
        <p>Alpha Chi Omega's national philantrhopy is the Alpha Chi Omega foundation which helps to raise money for educational and philanthropic endevers of Alpha Chi Omega's. The philanthropy of the Alpha Nu chapter of Alpha Chi Omega at Mizzou is domestic violence awareness. All of the proceeds raised by our chapter is donated to True North, which is a local women and children's shelter for those seeking safety from their abusers. 
        </p>
        
        <h2 class="h1">Our Events</h2>
        
        <p>
            Our main event in the fall is Burgers and Fries with Alpha Chis, which is a late night dinner on a Friday night where the Alpha Chi Omegas sell tickets to a burgers and fries dinner from 10pm-2am. 
        </p>
        <p>
            Our Main events in the spring are our "These Hands Don't Hurt" Campaign and out 3v3 "Swishin' for a Mission" basketball tournament. The "These Hands Don't Hurt" campaign involves members of our community purchasing paper hands made by the Alpha Chi Omegas for $1 to help support domestic violence awareness. These hands are stapled to boards where the community can see how many hands have been purchased. For the 3v3 basketball tournaments, members of other greek organizations sign up to particiapte in the tournament and help raise money for True North. 
        </p>
        
        <h3 class="h3">Philanthropy Video</h3>
        <div class="h3">
            <video width="320" height="240" controls>
                <source src="Philanthropy_Video.mp4" type="video/mp4">
            </video>
        </div>
        </div>
    </body>











</html>