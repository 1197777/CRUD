<?php 
include_once('connection.php');

if(isset($_POST["toevoegen"])){

    $sql = "INSERT INTO reizen
  
              (hotel, kosten)
  
              VALUES
  
              (:hotel,  :kosten )";
  
      $stmt = $connect->prepare($sql);
  
      $stmt->bindParam(':hotel', $_POST['hotel']);
  
      $stmt->bindParam(':kosten', $_POST['kosten']);
     
      $stmt->execute();
  
      header("Location: admin.php");
  }
?>
    <link rel="stylesheet" href="css/admin.css">
    <form id="it" action="#" method="post">
    Startdatum<input type= "date" name="startDatum" id="" ><br/> 
    Einddatum<input type= "date" name="eindtDatum" id="" ><br/> 
    Kosten<input type= "text" name="kosten" id=""><br/> 
    Hotel<input type= "text" name="hotel" id=""><br/> 
    Land<input type= "text" name="land" id=""><br/> 
    <input type="submit" value="Toevoegen" name="toevoegen">
</form>