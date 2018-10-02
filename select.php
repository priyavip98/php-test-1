
<?php 
include 'connect.php'; 
$mysqli=new mysqli("localhost","root","","myDB");
@mysql_select_db($database) or die( "Unable to select database");
$query1="SELECT * FROM entries";
$result=$mysqli->query($query1);
$mysqli->close();
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['Name']; ?></td> 
            <td><?php echo $row['Phone']; ?></td> 
            <td><?php echo $row['E_mail']; ?></td> 
        </tr>
        <?php
    }
}
?>

