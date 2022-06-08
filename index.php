<?php 
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<li><a href="#">Europa</a></li>	
				<li><a href="#">Midden-Oosten</a></li>
				<li><a href="#">Noord-Amerika</a>	</li>
				<li><a href="#">Azië</a></li>
                </ul></li>
                <li><a href="overons.php">Over ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <div class="middentekst">
            <h1>Verre Reizen. Voor Iedereen Uniek.</h1>
            <h2>Individuele reizen op maat.</h2>
        </div>
        <div class="container-box">
             <label for="bestemming"></label>
                <select id="country" name="country">
                    <option value="">Spanje</option>
                    <option value="#">Zuid-Afrika</option>
                </select>
                <label for="soortreis"></label>
                <select id="country" name="country">
                    <option value="#">Wintersport</option>
                    <option value="#">Zon</option>
                </select>
                <label for="datum"></label>
                <select id="country" name="country">
                    <option value="januari">Januari</option>
                    <option value="februari">Februari</option>
                </select>
        </div>
    </div> 
</body>
</html>