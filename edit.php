<?php 
    include_once('connection.php');

    if(isset($_GET['id'])) {
        $stmt = $connect->prepare("SELECT * FROM reizen where reisID = :id ");
        $stmt->execute(['id' => $_GET['id']]);
        $data = $stmt->fetch();
    }

    if(isset($_POST["toevoegen"])){
        $sql = "UPDATE reizen SET hotel = :hotel, kosten = :kosten WHERE reisID =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':hotel', $_POST['hotel']);
        $stmt->bindParam(':kosten', $_POST['kosten']);
        $stmt->bindParam(':startdatum', $_POST['startDatum']);
        $stmt->bindParam(':einddatum', $_POST['eindtDatum']);
        $stmt->bindParam(':land', $_POST['land']);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();

        $stmt = $connect->prepare("SELECT * FROM reizen where reisID = :id ");
        $stmt->execute(['id' => $_GET['id']]);
        $data = $stmt->fetch();
    }
?>
    <form action="#" method="post">
    startdatum<input type= "text" name="startDatum" id="" value="<?php echo $data["startDatum"];?>"><br/> 
    einddatum<input type= "text" name="eindtDatum" id="" value="<?php echo $data["eindDatum"];?>"><br/>  
    kosten<input type= "text" name="kosten" id="" value="<?php echo $data["kosten"];?>"><br/> 
    hotel<input type= "text" name="hotel" id="" value="<?php echo $data["hotel"];?>"><br/>
    land<input type= "text" name="land" id="" value="<?php echo $data["land"];?>"><br/>

    <input type="submit" value="toevoegen" name="toevoegen">
    </form>