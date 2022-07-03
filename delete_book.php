<?php 
include_once('connection.php');


// if($_SESSION['logged in'] ==true){
//     //echo "Welcome " . $_SESSION['username'];
// } else {
//     header("location: admin.php");
// }

$sql ="DELETE FROM boekingen WHERE boekingID=:boekingID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':boekingID', $_GET['id']);
    $stmt->execute();
    header("location: booking.php");
    ?>