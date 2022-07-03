<?php 
include_once('connection.php');

session_start();

if (!$_SESSION['admin']){
    header("Location: login.php");
}

$sql = "SELECT * FROM reizen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<link rel="stylesheet" href="css/admin.css">
    <body>
    <nav>
    <a  class="ins" href="insert.php">Insert</a>
    <a href="booking.php">Booking</a>
    <a href="account.php">Account</a>
    <a href="recensies.php">Recensies</a>
    <a href="loguit.php">Uitloggen</a> 
    <div class="animation start-home"></div>
    <table>
        <tr>
    </tr>
    </nav>
  </body>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["hotel"];?></td> 
        <td><?php echo $re["kosten"];?></td>
        <td><?php echo $re["land"];?></td>
        <td><a href="edit.php?id=<?php echo $re["reisID"];?>">Update</a></td>
        <td><a href="delete.php?id=<?php echo $re["reisID"];?>">Delete</a></td>
      </td>
</tr>


            <?php } ?>
</table>