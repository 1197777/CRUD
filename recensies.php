<?php 
include_once('connection.php');

if(isset($_POST["toevoegen"])){


    $sql = "INSERT INTO recensies
  
              (titel, email, datum, naam)
  
              VALUES
  
              (:titel, :email, :datum, :naam)";
  
      $stmt = $connect->prepare($sql);
  
      $stmt->bindParam(':naam', $_POST['naam']);
  
      $stmt->bindParam(':email', $_POST['email']);

      $stmt->bindParam(':titel', $_POST['titel']);

      $stmt->bindParam(':datum', $_POST['datum']);
     
      $stmt->execute();  
      header("Location: index.php");
}