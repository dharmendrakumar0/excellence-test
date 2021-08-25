<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	<?php include('success.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="first_name" id="first_name" required>
  	</div>
  	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="last_name" id="last_name">
  	</div>
	<div class="input-group">
  	  <label>Mobile No</label>
  	  <input type="text" name="mobile_no" id="mobile_no">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" id="email" required>
  	</div>
  	<div class="input-group">
  	  <label>DOB</label>
  	 <input type="text" name="dob" id="dob" required>
  	</div>
	<div class="input-group">
  	  <label>Designation</label>
  	 <input type="text" name="designation" id="designation" required>
  	</div>
	<div class="input-group">
  	  <label>Gender</label>
  	<input type="radio" name="gender" value="male" >Male
<input type="radio" name="gender" value="Female" >Female
  	</div>
	<div class="input-group">
  	  <label>Hobbies</label>
  	<input type="checkbox" id="yoga" name="hobbie[]" value="Yoga" >
  <label for="yoga"> Yoga</label><br>
  <input type="checkbox" id="cooking" name="hobbie[]" value="Cooking" >
  <label for="cooking"> Cooking</label><br>
  <input type="checkbox" id="reading" name="hobbie[]" value="Reading" >
  <label for="reading"> Book Reading</label><br>
  <input type="checkbox" id="photo" name="hobbie[]" value="Photography" >
  <label for="photo"> Photography</label>
  	</div>
  	<div class="input-group">
  	  <input type="submit"  id="SubmitForm" name= "SubmitForm" value="Submit"/>
  	</div>
  	
  </form>
</body>
</html>