<?php 
include_once('connection.php');

session_start();

if  $_SESSION['user'] = $data['username'];{
    header("Location: login.php");
    }


$sql = "SELECT gebruikerID FROM boekingen WHERE gebruikerID = :gebruikerID";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<a href="insert.php">insert</a>
<a href="loguit.php">uitloggen</a> 
<a href="booking.php">booking</a>
<a href="account.php">account</a>
<a href="rec_check.php">recensies</a>
<a href="index_admin.php">home</a>
<table>
    <tr>
</tr>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["naam"];?></td> 
        <td><?php echo $re["besteming"];?></td>
        <td><?php echo $re["startDatum"];?></td>
        <td><?php echo $re["eindDatum"];?></td>
        <td><a href="delete.php?id=<?php echo $re["reisID"];?>">Delete</a></td>
      </td>
</tr>


            <?php } ?>
</table>