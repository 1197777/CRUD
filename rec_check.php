<?php 
include_once('connection.php');

session_start();

if (!$_SESSION['admin']){
    header("Location: login.php");
}

$sql = "SELECT * FROM recensies";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<a href="insert.php">insert</a>
<a href="loguit.php">uitloggen</a> 
<a href="admin.php">admin</a>
<a href="recensies.php">recensies</a>
<table>
    <tr>
</tr>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["naam"];?></td> 
        <td><?php echo $re["email"];?></td>
        <td><?php echo $re["titel"];?></td>
        <td><a href="edit_admin.php?id=<?php echo $re["recensiesID"];?>">Update</a></td>
        <td><a href="delete.php?id=<?php echo $re["recensiesID"];?>">Delete</a></td>
      </td>
</tr>


            <?php } ?>
</table>