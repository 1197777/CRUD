<?php 
    include_once('connection.php');

    if(isset($_GET['id'])) {
        $stmt = $connect->prepare("SELECT * FROM gebruikers where gebruikerID = :id ");
        $stmt->execute(['id' => $_GET['id']]);
        $data = $stmt->fetch();
    }

    if(isset($_POST["toevoegen"])){
        $sql = "UPDATE gebruikers SET gebruikersnaam = :gebruikersnaam, wachtwoord = :wachtwoord WHERE gebruikerID =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':gebruikersnaam', $_POST['gebruikersnaam']);
        $stmt->bindParam(':wachtwoord', $_POST['wachtwoord']);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();


        $stmt = $connect->prepare("SELECT * FROM gebruikers where gebruikerID = :id ");
        $stmt->execute(['id' => $_GET['id']]);
        $data = $stmt->fetch();
        $stmt->execute();
    }
?>
    <form action="#" method="post">
    gebruikersnaam<input type= "text" name="gebruikersnaam" id="" value="<?php echo $data["gebruikersnaam"];?>"><br/> 
    wachtwoord<input type= "text" name="wachtwoord" id="" value="<?php echo $data["wachtwoord"];?>"><br/>  

    <input type="submit" value="toevoegen" name="toevoegen">
    <a href="insert.php">insert</a>
    <a href="loguit.php">uitloggen</a> 
    <a href="booking.php">booking</a>
    <a href="account.php">account</a>
    <a href="recensies.php">recensies</a>
    <a href="index_admin.php">home</a>
    </form>