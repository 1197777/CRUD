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
<a href="insert.php">insert</a>
<a href="loguit.php">uitloggen</a> 
<a href="admin.php">admin</a>
<a href="rec_check.php">recensies</a>

<table>
    <tr>
</tr>
</nav>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["gebruikersnaam"];?></td> 
        <td><?php echo $re["wachtwoord"];?></td>
        <td><?php echo $re["gebruikerID"];?></td>
        <td><a href="edit_admin.php?id=<?php echo $re["gebruikerID"];?>">Update</a></td>
        <td><a href="delete.php?id=<?php echo $re["gebruikerID"];?>">Delete</a></td>
      </td>
</tr>


            <?php } ?>
</table>