<?php
include 'connection.php';


?>

<!DOCTYPE/html>
<html>
<head>
    <title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>

<?php

?>
    <div class="container">
	<div class="col-lg-12">
	    <br><br>
		<h1 class="text-warning text-center">Show Table Data</h1>
		<a href="register.php">Add</a>
		<br>
		<table class="table table-script table-hover table-bordered">
		
		    <tr>
			    
				<th>ID</th>
			    <th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>DOB</th>
				<th>Mobile No</th>
				<th>Designation </th>
				<th>Gender</th>
				<th>Hobbies</th>
			</tr>
	<?php
            include'connection.php';
	        
	        $q="select * from user_info";
	        $result=mysqli_query($conn,$q);
			
			while($res=mysqli_fetch_array($result)){
				$hobbies= json_decode($res['hobbies']);
				//echo "<pre>"; print_r($hobbies); exit;

    ?>
			    
			<tr>
			    <td><?php echo $res['id'];?></td>
			    <td><?php echo $res['first_name'];?></td>
				<td><?php echo $res['last_name'];?></td>
		        <td><?php echo $res['email'];?></td>
				<td><?php echo $res['dob'];?></td>
				<td><?php echo $res['mobile_num'];?></td>
				<td><?php echo $res['designation'];?></td>
		        <td><?php echo $res['gender'];?></td>
				<td><?php echo implode(',', $hobbies); ?></td>
				
				
			</tr>
			<?php
			} 
			?>
		</table>
	</div>
	</div>
</body>
</html>