
<style>
td{
	padding:10px;
}
</style>
<?php
include 'config.php';
error_reporting(0);
$query="SELECT*from user";
$data  =mysqli_query($con,$query);
$total = mysqli_num_rows($data);


if($total!=0){
	?>
	<table>
	<tr>
		<th>ID</th>
		<th>Named</th>
		<th>Email</th>
		<th>Password</th>
		<th colspan=2>Operations</th>
		
	</tr>
	
	
	
	<?php
	while($result=mysqli_fetch_assoc($data)){
		echo"<tr>
				<td>".$result['id']."</td>
				<td>".$result['name']."</td>
				<td>".$result['email']."</td>
				<td>".$result['password']."</td>
				<td><a href='update.php?i=$result[id]&nm= $result[name] & em=$result[email]& ps=$result[password]'>Edit</a></td>
				<td><a href='delete.php?i=$result[id]&nm= $result[name] & em=$result[email]& ps=$result[password]'>Delete</a></td>
				
		
			</tr>";
	}
}else{
	echo"table has no records";
}

?>
</table>