<?php 
include_once('connection.php');

if(isset($_POST["toevoegen"])){

    $sql = "INSERT INTO gebruikers
  
              (gebruikersnaam, wachtwoord)
  
              VALUES
  
              (:gebruikersnaam,  :wachtwoord )";
  
      $stmt = $connect->prepare($sql);
  
      $stmt->bindParam(':gebruikersnaam', $_POST['gebruikersnaam']);
  
      $stmt->bindParam(':wachtwoord', $_POST['wachtwoord']);
     
      $stmt->execute();
      header("Location: index.php");
  }
?>