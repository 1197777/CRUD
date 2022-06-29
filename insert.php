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
    
    <form action="#" method="post">
    startdatum<input type= "text" name="startDatum" id="" ><br/> 
    einddatum<input type= "text" name="eindtDatum" id="" ><br/> 
    kosten<input type= "text" name="kosten" id=""><br/> 
    hotel<input type= "text" name="hotel" id=""><br/> 
    land<input type= "text" name="land" id=""><br/> 
    <input type="submit" value="toevoegen" name="toevoegen">
</form>