<?php 
require_once(__DIR__ . "/../system/config/backend-config.php");
ob_start();
session_start();
if (!empty($_POST["email"]) && !empty($_POST["password"])) {

    if ($_POST["email"] == $backend_config["email"] && $_POST["password"] == $backend_config["password"]) {
        
        $_SESSION["login"] = true;
       
        header("Location:index.php");

    }else{
        $error_text = "Username or password is wrong";

    }

}
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MobileEngineer https://codecanyon.net/user/mobileengineer">
    <meta name="author" content="MobileEngineer https://codecanyon.net/user/mobileengineer">

    <title>Admin Dashboard - MobileEngineer</title>

    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/metisMenu.css" rel="stylesheet">
   
   <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

  </head>

  <body class="bg-dark" id="page-top">

  <div class="container">
  <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <div class="login-panel panel panel-default">
         
              <div class="panel-heading">
                  <h3 class="panel-title">Sign In</h3>
              </div>
              <div class="panel-body">
                  <form role="form" action="login.php" method="post">
                      <fieldset>
                          <div class="form-group">
                              <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                          </div>
                          <div class="form-group">
                              <input class="form-control" placeholder="Password" name="password" type="password" value="">
                          </div>
                         
                          <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                         
                      </fieldset>
                  </form>
                  <div class="text-center">
              <h2><? echo $error_text; ?></h2>
            </div>
          <div class="text-center">
           <h6>Forgot Password?</h6>
           <p>Please read the document file. </p>
          </div>
              </div>
          </div>
      </div>
  </div>
</div>


  

    <script src="../theme/vendor/jquery/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>



    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
