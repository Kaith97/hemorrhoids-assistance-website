<?php include("nav2.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Haemorrhoids Assistance</title>
	<?php include("cdn.php"); ?> 
  <style type="text/css">
   
  </style>
</head>
<body>
<div class="container pt-5">
	<h1 class="text-center mt-5"><b>Haemorrhoids Assistance</b></h1><hr> 
  <div class="d-flex p-3 text-white justify-content-center"> 
	<button class="btn btn-outline-info text-right mr-2" data-toggle="modal" data-target="#registerModal"><i class="fas fa-registered mr-1"></i>Register</button>
	<button class="btn btn-outline-success" data-toggle="modal" data-target="#loginModal"><i class="fas fa-sign-in-alt mr-1"></i>Login</button>
  </div>

  <div class="text-center mt-5">
    <img src="img/causes-of-hemorrhoids.jpg" class="img-fluid">
  </div>

</div>




<!--Register Modal -->
<div class="modal fade" id="registerModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Registration Form</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="auth/register.php">
        	<input type="text" name="name" placeholder="Enter Username" class="form-control" required=""><br>
        	<input type="password" name="password" placeholder="Enter Password" class="form-control" required=""><br>
          <input type="password" name="cpassword" placeholder="Enter Confirm Password" class="form-control" required=""><br>
        	<input type="email" name="email" placeholder="Enter email" class="form-control" required=""><br>
        	<input type="number" name="phone" placeholder="Enter Phone Number" class="form-control" required=""><br>
        	<input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control" required=""><br>
        	<input type="radio" name="gender" value="male" checked class="mr-1">Male
        	<input type="radio" name="gender" value="female" class="mr-1">Female<br><br>
        	<input type="file" name="photo"> <br><br>
          <textarea class="form-control" placeholder="Enter Address" name="address" required=""></textarea> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-registered mr-1"></i>Register</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--Login Modal -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Login Form</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="auth/login.php">
        	<input type="text" name="name" placeholder="Enter Username" class="form-control"><br>
        	<input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-sign-in-alt mr-1"></i>Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>