<?php
 include("../includes/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- bootstrap Css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- font awesomelink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid my-3">
    <h2 class="text-center fw-bold">New User Registration</h2>
    <br>
    <div class="row d-flex align-items-center justify-content">
     <div class="col-lg-12 col-x1-6">
<form action="" method="post" enctype="multipart/form-data">
    <div class ="form-outline mb-4 w-50 m-auto">
<!-- username field -->
<label for="user_username" clas="form-label">Username</label>
<input type="text" id="user_username" class="form-control"
placeholder="Enter your username" autocomplete="off"
required="required" name="user_username"/>
</div>
<br>
<!-- email field -->
<div class ="form-outline mb-4 w-50 m-auto">
<labe<div class ="form-outline mb-4 w-50 m-auto">
<label for="user_email" clas="form-label">Email</label>
<input type="email" id="user_email" class="form-control"
placeholder="Enter your email" autocomplete="off"
required="required" name="user_email"/>
</div>
<br>
<!--user images  -->
<div class ="form-outline mb-4 w-50 m-auto">
<label for="user_image" clas="form-label">User Image</label>
<input type="file" id="user_image" class="form-control"
required="required" name="user_image"/>
</div>
<br>
<!--password -->
<div class ="form-outline mb-4 w-50 m-auto">
<label for="user_password" clas="form-label">Password</label>
<input type="password" id="user_password" class="form-control"
placeholder="Enter your password" autocomplete="off"
required="required" name="user_password"/>
</div>
<br>
<!-- confirm password -->
<div class ="form-outline mb-4 w-50 m-auto">
<label for="conf_user_password" clas="form-label">Confirm Password</label>
<input type="password" id="conf_user_password" class="form-control"
placeholder="Enter your  confirm password" autocomplete="off"
required="required" name="conf_user_password"/>
</div>
<br>
<!-- Address field -->
<div class ="form-outline mb-4 w-50 m-auto">
<label for="user_address" clas="form-label">Address</label>
<input type="text" id="user_address" class="form-control"
placeholder="Enter your address name" autocomplete="off"
required="required" name="user_address"/>
</div>
<br>
<!-- contact -->
<div class ="form-outline mb-4 w-50 m-auto">
<label for="user_contact" clas="form-label">Contact</label>
<input type="text" id="user_contact" class="form-control"
placeholder="Enter your contact number" autocomplete="off"
required="required" name="user_contact"/>
</div>
<br>
<div class="form-outline mb-4 w-50 m-auto">
    <input type="submit" name="user_register" class="btn-info mb-3 py-2 px-3"
     value="Register">
     <p class="small fw-bold ">Already have an account?<a href=
     "user_login.php">Login</a></p>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

<!-- php code -->

<?php
if(isset($_POST['user_register'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $conf_user_passsword=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_temp=$_FILES['user_image']['temp_name'];
}


?>