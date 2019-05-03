<?php

	if(!session_start()) {
		header("Location: Cmpvm5Final_Error.php");
		exit;
	}
	
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: Cmpvm5Final_LoginForm.php");
		exit;
	}
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
        
        <link rel="stylesheet" href="style.css">
        <script src="jquery-2.1.0.min.js"></script>
        <script src="app.js"></script>
        
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
        
        <h1 class="h1">Alpha Chi Omega: Member Resources</h1>
        <img class ="AXOlogo" src="AXO_logo.png" alt="AXO">
        
        
            <div class="wrapper"> 
                <h1 class="funFact">We love to hear feedback from our memebers!</h1>
                <div class="funFact">
                   <p>If you have any questions, comments, or concerns about upcomming events please feel free to contact us through our email form below! </p> 
                    <p>For emergencies or immediate assistance, please call our help line!</p>
                    <p>Help Line: (314)-315-0374</p>
                </div>
            
    
        
    <div id="page-wrapper">
	  <h1>Contact Form</h1>

	  <div id="form-messages"></div>
		
		<form id="ajax-contact" method="post" action="mailer.php">
			<div class="field">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
			</div>

			<div class="field">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
			</div>

			<div class="field">
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>
			</div>

			<div class="field">
				<button type="submit">Send</button>
			</div>
		</form>
	</div>
	
	<script src="jquery-2.1.0.min.js"></script>
	<script src="app.js"></script>
    
        <h2 class="funFact">Our Address: </h2>
        <div class="funFact">
            <p>900 Richmond Ave.</p>
            <p>Columbia, MO 65201</p>
        </div>
        </div>
    </body>
  
</html>