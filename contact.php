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