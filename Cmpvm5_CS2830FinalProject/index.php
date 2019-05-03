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
        
<!--        Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="Cmpvm5Final_Stylesheet1.css">
    
        
        <script>
        function printParagraph1(){
            
                var xmlHttp = new XMLHttpRequest();
		
                xmlHttp.onload = function() {
                    if (xmlHttp.status == 200) {
                        var xmlDoc = xmlHttp.responseText;
                         
                        var divObj = document.getElementById('content1');
				        divObj.innerHTML = xmlDoc;
                    }  
                }
                
                document.getElementById("content1").innerHTML = "Loading...";
                
                xmlHttp.open("GET", "paragraph.php", true);
		        xmlHttp.send();
            }
    
            function printParagraph2(){
            
                var xmlHttp = new XMLHttpRequest();
		
                xmlHttp.onload = function() {
                    if (xmlHttp.status == 200) {
                        var xmlDoc = xmlHttp.responseText;
                         
                        var divObj = document.getElementById('content');
				        divObj.innerHTML = xmlDoc;
                    }  
                }
                
                document.getElementById("content").innerHTML = "Loading...";
                
                xmlHttp.open("GET", "paragraph2.php", true);
		        xmlHttp.send();
            }
        </script>
        
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
        
        <img class ="AXOlogo" src="AXO_logo.png" alt="AXO">
        
        <h1 class="h1">Alpha Chi Omega: Alpha Nu Home Page</h1>
        
        <div class="wrapper">
            
            <div class="homeText"><img class="logo" src="AXO_crest.png" alt="crest"></div>
            <div class="homeText">
                <p>
                    Alpha Chi Omega was founded October 15, 1885 at DePauw University in Indiana. Our open motto is "Together let us seek the heights" and our symbol is the golden lyre. Our flower is the red carnation and out patron Greek divinity is Hera. Our philanthropy is domestic violence awareness, which you can read more about on our philantrhopy page. Alpha Chi Omega is the only musical fraternity. 
                </p>
                
                <div id="content1" class="funFact"> 
                    <button type="button" onclick="printParagraph1()">Fun Fact!</button>
                </div>
                
            </div>
            <div id="content" class="funFact">
                   <button type="button" onclick="printParagraph2()">Fun Fact!</button> 
            </div>
            
        
        </div>
        
    </body>

</html>