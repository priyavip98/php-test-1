<?php include 'connect.php'; 
$mysqli=new mysqli("localhost","root","","myDB");
if($mysqli===false)
{
	die("error:could not connect".$mysqli->connect_error);

}
$sql="INSERT INTO entries(Name,Phone,E_mail)
 VALUES('PETER','9999222233','abc@gmail.com'),
 ('MARIO','8888444422','xyz@gmail.com'),
 ('FRANCIS','88888333322','lmn@gmail.com'),
 ('BUDDY','8888777766','cdf@gmail.com'),
 ('CANDY','9999557746','cfg@gmail.com'),
 ('CHRISTY','7888939889','jks@gmail.com')";
$sql="DELETE 
FROM 
    TABLE
WHERE
    ID IN (
        SELECT
            ID
        FROM 
            TABLE
        WHERE 
            EMAILADDRESS IN (
                SELECT 
                    EMAILADDRESS
                FROM
                    TABLE
                GROUP BY EMAILADDRESS
                HAVING COUNT(1) > 1
            )
    ) " ;
if($mysqli->query($sql)===true)
{
	echo "records added successfully";
} 
else
{
	echo "ERROR:could not able to execute $sql.".$mysqli->error;
}
$mysqli->close;
?>

