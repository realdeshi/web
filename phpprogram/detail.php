<?php
include('config.php');
?>
<?php
$sql="SELECT * FROM 'users'";
$result = mysqli_query($conn,$sql);
if($result->num_rows > 0)
{

?>
 <table border="1px">
 	<tr>
 		<th>Username</th>
 		<th>E-mail</th>
 		<th>Gender</th>
 		<th>City</th>
 	</tr>
 	<?php
 	while($row=$result->fetch_array()) {?>
 		<tr>
 			<td><?php echo $row[0]?></td>
 			<td><?php echo $row[1]?></td>
 			<td><?php echo $row[2]?></td>
 			<td><?php echo $row[3]?></td>
 		</tr>
 	<?php}?>
 </table>
<?php
}
?>