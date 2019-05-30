<!DOCTYPE html>
<html>
<head><title>STUDENT Details</title>
</head>
<body>
	<form action="ass2q3.php" method="post">
	<input type="number" name="roll" placeholder="Roll"><br><br> 
	<input type="text" name="name" placeholder="Name"><br><br>
	<input type="number" name="age" placeholder="Age"><br><br>
	<input type="text" name="address" placeholder="Address"><br><br>
	<input type="number" name="phone" placeholder="Phone"><br><br>
	<divl>
		<input type="submit" name="insert" value="Add">
		<input type="submit" name="update" value="Update">
		<input type="submit" name="delete" value="Delete">
		<input type="submit" name="search" value="Find">
	</divl>
	</form>
	
	<?php
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "test";
	
	$roll="";
	$name="";
	$age="";
	$address="";
	$phone="";
	
	
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
	try{
		$connect = mysqli_connect($host, $user, $password, $database);
	}catch(Exception $ex){
		echo 'Error';
	}
	
	function getPosts()
	{
		$posts = array();
		$posts[0] = $_POST['roll'];
		$posts[1] = $_POST['name'];
		$posts[2] = $_POST['age'];
		$posts[3] = $_POST['address'];
		$posts[4] = $_POST['phone'];
		return $posts;
	}
	
	if(isset($_POST['search']))
	{
		$data = getPosts();
		$search_Query = "SELECT * FROM `student` WHERE `roll`=$data[0]";
		
		$search_Result = mysqli_query($connect,$search_Query);
		
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
					$roll = $row['roll'];
					$name = $row['name'];
					$age = $row['age'];
					$address = $row['address'];
					$phone = $row['phone'];
				}
			}else{
				echo 'No such data for this roll no ';
			}
		}else{
			echo 'Result error';
		}
	}
	
	if(isset($_POST['insert']))
	{
		$data = getPosts();
		$insert_Query = "INSERT INTO `student`(`roll`, `name`, `age`, `address`, `phone`) VALUES ($data[0],'$data[1]',$data[2],'$data[3]',$data[4])";
		
		try{
			$insert_Result = mysqli_query($connect,$insert_Query);
			
			if($insert_Result)
			{
				if(mysqli_affected_rows($connect)>0)
				{
					echo 'Data Inserted';
				}else{
					echo 'Data Not Inserted';
				}
			}
		}
		catch(Exception $ex){
			echo 'Error Insertion '.$ex->getMessage();
		}
	}
	
	if(isset($_POST['delete']))
	{
		$data = getPosts();
		$delete_Query = "DELETE FROM `student` WHERE $data[0]";
		
		try{
			$delete_Result = mysqli_query($connect,$delete_Query);
			
			if($delete_Result)
			{
				if(mysqli_affected_rows($connect)>0)
				{
					echo 'Data Deleted';
				}else{
					echo 'Data Not Deleted';
				}
			}
		}
		catch(Exception $ex){
			echo 'Error Deletetion '.$ex->getMessage();
		}
	}
	
	if(isset($_POST['update']))
	{
		$data = getPosts();
		$update_Query = "UPDATE `student` SET `name`='$data[1]',`age`=$data[2],`address`='$data[3]',`phone`=$data[4] WHERE `roll`=$data[0]";
		
		try{
			$update_Result = mysqli_query($connect,$update_Query);
			
			if($update_Result)
			{
				if(mysqli_affected_rows($connect)>0)
				{
					echo 'Data Updated';
				}else{
					echo 'Data Not Updated';
				}
			}
		}
		catch(Exception $ex){
			echo 'Error Updation '.$ex->getMessage();
		}
	}
	
	?>
</body>
</html>