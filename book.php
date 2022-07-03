<?php 
include_once('connection.php');

if('hoi' == 'hoi'){
    session_start();

    $sql = "SELECT reisID FROM reizen WHERE land = :land";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':land', $_POST['reisID']);
    $stmt->execute();  

    $result = $stmt->fetch();
    var_dump($result);
    if($result){
    

    $sql = "INSERT INTO boekingen
  
              (gebruikerID, reisID, naam, email, phone, bestemming, personen, startDatum, eindDatum)
  
              VALUES
  
              (:gebruikerID, :reisID, :naam, :email, :phone, :bestemming, :personen, :startDatum, :eindDatum)";
  
      $stmt = $connect->prepare($sql);
  
      $stmt->bindParam(':gebruikerID', $_SESSION['gebruikerID']);
  
      $stmt->bindParam(':reisID', $result['reisID']);
  
      $stmt->bindParam(':naam', $_POST['naam']);
  
      $stmt->bindParam(':email', $_POST['email']);

      $stmt->bindParam(':phone', $_POST['phone']);

      $stmt->bindParam(':bestemming', $_POST['bestemming']);

      $stmt->bindParam(':personen', $_POST['personen']);

      $stmt->bindParam(':startDatum', $_POST['startDatum']);

      $stmt->bindParam(':eindDatum', $_POST['eindDatum']);
     
      $stmt->execute();  
      header("Location: user_index.php");
    }
    echo 'poep';
}

echo 'poep';