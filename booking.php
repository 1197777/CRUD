<?php
include_once('connection.php');
$sql = "SELECT * FROM boekingen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<table>
    <tr>
</tr>
<?php foreach($result as $re){?>
    <tr>
        <td><?php echo $re["naam"];?></td> 
        <td><?php echo $re["email"];?></td>
        <td><?php echo $re["phone"];?></td>
        <td><?php echo $re["reisID"];?></td>
        <td><?php echo $re["personen"];?></td>
        <td><?php echo $re["startDatum"];?></td>
        <td><?php echo $re["eindDatum"];?></td>
        <td><a href="delete_book.php?id=<?php echo $re["boekingID"];?>">Delete</a></td>
      </td>
</tr>


            <?php } ?>
</table>