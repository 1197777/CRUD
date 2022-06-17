<?php 
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Document</title>
</head>
<body>
    <div class="contact">

    
<nav class="nav-area">
            <img class= "logo1"src="img/logo.png" alt="image1">
            <div class="logoh1">
                <h1>TravelSpace</h1>
            </div>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="bestemmingen.php">Bestemmingen</a> 
                <ul>             
                <li><a href="eu.php">Europa</a></li>	
				<li><a href="mo.php">Midden-Oosten</a></li>
                <li><a href="la.php">Latijns-Amerika</a></li>
				<li><a href="na.php">Noord-Amerika</a></li>
				<li><a href="azië.php">Azië</a></li>
                <li><a href="afrika.php">Afrika</a></li>
                </ul></li>
                <li><a href="overons.php">Over ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
   
<form action="contact-form.php" method="POST">
    <div class="container">
        <div class="container-box">
            <div class="left"></div>
            <div class="right">
                <h2>Contact ons</h2>
                <input type="text" class="field" placeholder="Naam..." name="name">
                <input type="email" class="field" placeholder="Email..." name="email">
                <input type="text" class="field" placeholder="Telefoon..." name="phone">
                <textarea class="field area" placeholder="Message..." name="message"></textarea>
                <button class="btn" name="submit">Stuur</button>
                </form>
            </div>
        </div>
    </div>
</form>
</body>
</html>