<?php
$errors =  array();
$success = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'excellence_test');

// REGISTER USER
if (isset($_POST['SubmitForm'])) {
  // receive all input values from the form
		$firstName=$_POST['first_name'];
		$lastName=$_POST['last_name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$mobileNo=$_POST['mobile_no'];
		$designation=$_POST['designation'];
		$gender=$_POST['gender'];
		$hobbie= json_encode($_POST['hobbie']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
	if (empty($firstName)) { array_push($errors, "First Name is required"); }
	if (empty($lastName)) { array_push($errors, "Last Name is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($dob)) { array_push($errors, "DOB is required"); }
	
	if (empty($mobileNo)) { 
		array_push($errors, "Mobile No is required"); 
	}elseif(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $mobileNo)) {
				array_push($errors, "Mobile No is valid");
	}
	
	if (empty($designation)) { array_push($errors, "Designation is required"); }
	if (empty($gender)) { array_push($errors, "Gender is required"); }
	if (empty($hobbie)) { array_push($errors, "Hobbie is required"); }  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_info WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
   

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }else{
		$sql="INSERT INTO user_info (`first_name`,`last_name`,`email`,`dob`, `mobile_num`,`designation`,`gender`,`hobbies`) values ('$firstName','$lastName','$email','$dob','$mobileNo','$designation','$gender','$hobbie')";
	

	$result=mysqli_query($db,$sql);
	
	if($result)
	{
		array_push($success, "Registration successfull"); 
		header('location:index.php'); exit;
	}else
	{
		
		echo"Registration fail".mysqli_error($conn);
	}
	}


}





?>
