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
<a href="insert.php">insert</a>
<a href="loguit.php">uitloggen</a> 
<a href="booking.php">booking</a>
<a href="account.php">account</a>
<a href="rec_check.php">recensies</a>
<a href="index_admin.php">home</a>
<table>
    <tr>
</tr>
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