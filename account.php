<?php 
include_once('connection.php');

session_start();

if (!$_SESSION['admin']){
    header("Location: login.php");
}

$sql = "SELECT * FROM gebruikers";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<link rel="stylesheet" href="css/admin.css">
<nav>
<a href="insert.php">Insert</a>
<a href="loguit.php">Uitloggen</a> 
<a href="admin.php">Admin</a>
<a href="recensies.php">Recensies</a>
<div class="animation start-home"></div>
<table>
    <tr>
</tr>
</nav>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["gebruikersnaam"];?></td> 
        <td><?php echo $re["wachtwoord"];?></td>
        <td><?php echo $re["gebruikerID"];?></td>
        <td><a href="edit.php?id=<?php echo $re["gebruikerID"];?>">Update</a></td>
        <td><a href="delete.php?id=<?php echo $re["gebruikerID"];?>">Delete</a></td>
      </td>
</tr>


            <?php } ?>
</table>