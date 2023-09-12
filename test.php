<?php
$ser = "localhost:3306";
$us = "root";
$pw = "";
$dt = "test";
$con = new mysqli($ser, $us, $pw, $dt);
// if($con)
// {
//     echo "CONNECTED TO THE DATABASE";
// }
$a=$_POST["ID"];
$b=$_POST["Name"];
// echo $a;
// echo $b;
$ins=mysqli_query($con,"insert into dummy_table values($a,'$b')");
echo "Record inserted";
$disp=mysqli_query($con, "select * from dummy_table");
?>
<table border=1>
    <tr><th>ID</th>
<th>Name</th></tr>
<?php
while($db_row=mysqli_fetch_array($disp))
{
    ?>
<tr>
   <td><?php echo $db_row["ID"]; ?></td>
   <td><?php echo $db_row["Name"]; ?></td>
</tr>
<?php } ?>

</table>