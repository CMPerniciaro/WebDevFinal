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
        
<!--       Bootstrap-->
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
    
        <h1 class="h1">Alpha Chi Omega: Leadership</h1>
        <img class ="AXOlogo" src="AXO_logo.png" alt="AXO">
        
        <div class="wrapper">
            <h1 class="funFact">Leadership Roles</h1>
            <div class="a">
            <p>Alpha Chi Omega has 14 leadership roles which make up the Executive Board. These executive members serve for one calendar year as their position. Every fall elections are held where candidates will give their speeches in front of the chapter on why and how they feel they would best serve on the executive board. These positions include President, Vice President of Chapter Relations and Standards, Vice President of Finance, Vice President of Risk Managment, Vice President of Ritual, Vice President of Membership Programing, Vice President of Philanthropy, Vice President of Public Relations, Vice President of Recruitment, Vice President of Recruitment Information, Vice President of New Member Education, Vice President of Intellectual Development, House Manager, and Panhellinic Delegate. 
            </p>
            </div>    
            <h2 class="funFact">What each position does</h2>
        
            <div class="a">
                <p> President: The president is in charge of the chapter and is the head of the executive board.<br>
                Vice President of Chapter Relations and Standards: head of the standards board which makes sure the values and standards of Alpha Chi Omega are upheld by its members
                <br>
                Vice President of Finance: in charge of the chapter's finances
                <br>
                Vice President of Risk Managment: in charge of planning socials, sits on the standards board
                <br>
                Vice President of New Member Education: in charge of inducting and educationg the new members of the sorority
                <br>
                Vice President of Ritual: in charge of ceremonies and makes sure the integrity of ritual history is protected
                <br>
                Vice President of Membership Programing: in charge of planning sisterhood events for the members of Alpha Chi Omega 
                <br>
                Vice President of Philanthropy: in charge of philanthropy events and raising money for True North
                <br>
                Vice President of Public Relations: in charge of all media, such as Instagram, Twitter, our Website, and all internal communication amongst memebers
                <br>
                Vice President of Recruitment: in charge of the recruitment process 
                <br>
                Vice President of Recruitment Information: in charge of the internal recruitment process
                <br>
                Vice President of Intellectual Development: in charge of upholding the grade standards of the chapters and implementing programs to help members achieve academic success
                <br>
                House Manager: in charge of mainting the rules of the Alpha Chi Omega chapter house
                <br>
                Pangellinic Delegate: in charge of communcating withe the Panehellinic Association
    
                </p>
                
            </div>
            <div class="a">
                <p>
                    Along with the 14 executive positions, there are also over 40 committee positions. Every committee resides under an executive memeber. For example, the social committee is under the Vice President of Risk Managment. Whereas the standards board is made up of other specific executive members and class representatives. Every member of Alpha Chi Omega has ample opportunity to get involved
                </p>
            </div>
        </div>
    </body>


</html>