<?php 
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>  
    <div class="bannerimage">
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
				<li><a href="na.php">Noord-Amerika, Oceanië</a></li>
                <li><a href="mza.php">Zuid-Amerika</a></li>
				<li><a href="azië.php">Azië</a></li>
                <li><a href="afrika.php">Afrika</a></li>
                </ul></li>
                <li><a href="overons.php">Over ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="rece.php">recensies</a></li>
                <li><a href="loguit.php">uitloggen</a></li>
            </ul>
        </nav>
        <div class="middentekst">
            <h1>Verre Reizen. Voor Iedereen Uniek.</h1>
            <h2>Maak van jouw eerstvolgende reis een unieke ervaring!</h2>
        </div>
    </div>
    <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Typ om te zoeken...">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>
    <div class="container-stuk">
        <div class="container-stukje">
            <h1>TravelSpace brengt je dichterbij</h1>
           <p>Welkom bij TravelSpace, een persoonlijke en eigenwijze reisorganisatie. Voor ons is reizen het mooiste dat er is. We laten je de highlights zien, maar ook de onbekende plekken. Wij reizen veelvuldig de wereld over en creëren onze eigen routes en ervaringen. Dit doen we samen met onze partners ter plaatse zodat we jou écht het land kunnen laten zien. Het liefst zo ver mogelijk van de platgetrapte paden, dichtbij de natuur en veel in contact met de bevolking en cultuur van een land, waardoor de bevolking maximaal mee profiteert. Onze hotels zijn handpicked, kleinschalig en liggen veelal op unieke plekken. Zo brengen we je dichterbij je bestemming én zo ook dichterbij een mooiere wereld. Want als je met TravelSpace reist ben je ervan verzekerd dat je verantwoord reist en positief bijdraagt.</p>
          
           <div class="opt">
            <a href="overons.php">
            <button type="submit">Lees Meer</button>
            </a>
        </div>
        </div>
    </div>
    <div class="container-stuk2">
           <h1>Populaire Bestemmingen</h1>
           <a href="bestemmingen.php">Alle Bestemmingen ></a>
        <div class="alle-images">
            <div class="linkerkant">
                <div class="image">
                    <div id="zoom-in">
                        <figure onclick="document.location='form.php'" > 
                        <img src="img/spain-image.jpg" alt="">
                        <div class="image-tekst">
                        <h4>Spanje</h4>
                    </div>
                        </figure>
                </div>
            </div>
            <div class="image">
                <div id="zoom-in">
                    <figure onclick="document.location='form.php'">
                        <img src="img/turkey-image.jpg" alt="">
                    <div class="image-tekst">
                        <h4>Turkije</h4>
                    </div>
                    </figure>
                </div>
            </div>
            <div class="image">
                <div id="zoom-in">
                    <figure onclick="document.location='form.php'">
                        <img src="img/us-image.jpg" alt="">
                    <div class="image-tekst">
                        <h4>Amerika</h4>
                    </div>
                    </figure>
                </div>
            </div>
            <div class="image">
                <div id="zoom-in">
                    <figure onclick="document.location='form.php'">
                        <img src="img/thailand-image.jpg" alt="">
                    <div class="image-tekst">
                        <h4>Thailand</h4>
                    </div>
                    </figure>
                </div>
            </div>

            </div>
            <div class="rechterkant">
            <div class="image">
                <div id="zoom-in">
                    <figure onclick="document.location='form.php'">
                        <img src="img/brazil-image.jpg" alt="" >
                        <div class="image-tekst">
                            <h4>Brazilië</h4>
                        </div>
                    </figure>
                </div>
            </div>

            </div>
          </div>
    </div>
    <div class="footer">
  <div class="col-1">
    <h3>Gebruikbare links</h3>
    <a href="bestemmingen.php">Bestemmingen</a>
    <a href="overons.php">Over ons</a>
    <a href="login.php">Login</a>
  </div>
  <div class="col-2">
    <h3>Newslatter</h3>
    <div class="tm">
      <input type="email" placeholder="Email Adress...">
      <button type="submit">Stuur</button>
</div>
  </div>
  <div class="col-3">
    <h3>Neem Contact op</h3>
    <a href="contact.php">
    <button>Contact</button>
    </a>
    <p>1093 EX, 020, Netherlands, Email: contact@travelspace.com</p>
  </div>
</body>
</html>