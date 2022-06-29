<?php 
include_once('connection.php');


// if($_SESSION['logged in'] ==true){
//     //echo "Welcome " . $_SESSION['username'];
// } else {
//     header("location: admin.php");
// }

$sql ="DELETE FROM reizen WHERE reisID=:id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header("location: admin.php");
    ?>