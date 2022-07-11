<?php
	require_once "db.php";
	
	$uname=$_POST['uname'];
	$uage=$_POST['uage'];
	$uemail=$_POST['uemail'];
	
	$query="INSERT INTO users(name,age,email) VALUES ('$uname','$uage','$uemail')";
	$result=mysqli_query($dbCon,$query);
	if ($result):
		echo "Inserted";
	endif;
	
	
	$query="select * from users"; 
	$result=mysqli_query($dbCon,$query);
?>
<table border="2">
<?php	
	if ($result->num_rows > 0): 
		while($array=mysqli_fetch_row($result)): 
?>
<tr>
		<th scope="row"><?php echo $array[0];?></th>
		<td><?php echo $array[1];?></td>
		<td><?php echo $array[2];?></td>
		<td><?php echo $array[3];?></td>

<tr> 
<?php
		endwhile; 
	endif;
	

?>
</table>
