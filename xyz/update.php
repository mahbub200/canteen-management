
<?php
  include 'config.php';
  error_reporting(0);
  $_GET['i'];
  $_GET['nm'];
  $_GET['em'];
  $_GET['ps'];
  
?>
<!tutorial>
<html>
	<head>
		
	</head>
	<body >
		
		
		
		<form action="" method="GET">
		<b><label>ID</br></label>
		<input name="id" type="number" id="form" placeholder="Enter your id" required value="<?php  echo $_GET['i'] ?>">
		<b><label></br>Name</br></label>
		<input name="name" type="text" id="form" placeholder="Enter your name" required value="<?php  echo $_GET['nm'] ?>">
		</input></br>
		<b><label>Email</br></label>
		<input name="email" type="email" id="form" placeholder="Enter your email" required value="<?php  echo $_GET['em'] ?>">
		</input></br>
		<b><label>Password</br></label>
		<input name="password" type="password" id="form" placeholder="Enter your Password" required value="<?php  echo $_GET['ps'] ?>">
		</input></br>
		
		</input>
		
		<input name="submit" type="submit" id="button" value="update">
		
		
	</form>
	<?php
	if($_GET['submit']){
		$id= $_GET['id'];
		$name= $_GET['name'];
	$email= $_GET['email'];
	$password= $_GET['password'];
		$query="	UPDATE user SET Name='$name',Email='$email',Password='$password' WHERE id='$id'";
		$data  = mysqli_query($con,$query);
		if($data){
			echo"Record updated successfully <a href='display.php'>check updated record</a>";
		}else{
			echo"Record not updated";
		}
	}else{
		echo"click on update button to save changes";
	}
	?>