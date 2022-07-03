<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/rece.css">
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
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    <div class="pr">
    <form class="form" action="recensies.php" method="post" class="book-form">
      <div class="pageTitle title">recensies </div>
      <div class="secondaryTitle title">Please fill this form to sign up.</div>
      <input type="text" class="name formEntry" name="naam" />
      <input type="text" class="email formEntry" placeholder="email"  name="email"/>
      <input type="text" class="email formEntry" type="date" placeholder="enter your address" name="datum">
      <textarea class="message formEntry" placeholder="Message" name="titel"></textarea>
      <input type="checkbox" class="termsConditions" value="Term">
      <label style="color: grey" for="terms"> I Accept the <span style="color: #0e3721">Terms of Use</span> & <span style="color: #0e3721">Privacy Policy</span>.</label><br>
      <button class="submit formEntry" onclick="thanks()" type="submit" value="submit" class="btn" name="toevoegen">Submit</button>
    </form>
  </div>
  <?php 
    include_once('connection.php');
    session_start();

    if (!$_SESSION['admin']){
    }

    $sql = "SELECT * FROM recensies";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
    <table>
    <tr>
    </tr>
    <?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["naam"];?></td> 
        <td><?php echo $re["email"];?></td>
        <td><?php echo $re["titel"];?></td>

      </td>
    </tr>


            <?php } ?>
    </table>
</body>

</html>
</html>