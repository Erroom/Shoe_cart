<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
      <!-- bootstrap Css link -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- font awesomelink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div class="container-fluid my-3">
    <h2 class="text-center fw-bold">Login Form</h2>
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

<!--password -->
<div class ="form-outline mb-4 w-50 m-auto">
<label for="user_password" clas="form-label">Password</label>
<input type="password" id="user_password" class="form-control"
placeholder="Enter your password" autocomplete="off"
required="required" name="user_password"/>
</div>
<br>
<div class="form-outline mb-4 w-50 m-auto">
    <input type="submit" name="user_register" class="btn-info mb-3 py-2 px-3"
     value="Login">
     <p class="small fw-bold ">Don't have an account?<a href=
     "user_registration.php"> Registration</a></p>
</div>
</form>
</div>
</div>
</div>
</body>
</html>