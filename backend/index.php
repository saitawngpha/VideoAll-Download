<?php
require_once(__DIR__ . "/../system/config/config.php");
require_once(__DIR__ . "/../system/config/backend-config.php");
require_once(__DIR__ . "/../system/functions.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
  header("Location:login.php");
}

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

  <body id="page-top">


  <div id="wrapper">

  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MobileEngineer</a>
            </div>
            <!-- /.navbar-header -->

<div class="sol-menu">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                
                    <ul class="nav" id="side-menu">
                       
                    <li>
                            <a href="index.php"><i class="fa fa-gear fa-fw"></i> GENERAL SETTINGS</a>
                        </li>
                        <li>
                            <a href="index.php?page=2"><i class="fa fa-usd fa-fw"></i> ADS MANAGER</a>
                        </li>
                        <li>
                            <a href="index.php?page=4"><i class="fa fa-language fa-fw"></i> LANGUAGE</a>
                        </li>
                        <li>
                            <a href="index.php?page=6"><i class="fa fa-file-text fa-fw"></i> PAGES</a>
                        </li>
                        <li>
                            <a href="index.php?page=9"><i class="fa fa-line-chart fa-fw"></i> ANALYTICS</a>
                        </li>
                        <li>
                            <a href="index.php?page=3"><i class="fa fa-user fa-fw"></i> LOGIN SETTINGS</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> LOGOUT</a>
                        </li>
                       
                       
                        
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            </div>
            <ul class="nav navbar-top-links navbar-right">
               
            <li class="dropdown">
                    <a class="dropdown"  href="index.php">
                        <i class="fa fa-user fa-fw"></i> Admin
                    </a>
            </li>
                <li class="dropdown">
                    <a class="dropdown"  href="logout.php">
                        <i class="fa fa-sign-out fa-fw"></i> Logout
                    </a>
                  
                </li>
              
            </ul>
            

           
           
        </nav>

        <div id="page-wrapper">


        
 

        <div class="row">

         <?php 
if (!empty($_GET["page"])) {
    switch ($_GET["page"]) {
        case '1':
        include 'system/settings.php';

        break;
        case '2':
        include 'system/ads.php';

        break;
        case '3':
        include 'system/backend_profile.php';

        break;
        case '4':
        include 'system/lang_add.php';

        break;
        case '5':
        include 'system/lang_edit.php';

        break;
        case '6':
        include 'system/page_add.php';

        break;
        case '7':
        include 'system/page_edit.php';

        break;
        case '8':
       
        $file = "../system/config/menu.php";
$file = fopen($file,"r");
while(!feof($file))
{
$page_content = fgets($file, 255);

}

$data = json_decode($page_content, true);


        break;
        case '9':
        include 'system/analytics.php';
        break;
        default:
        include 'system/settings.php';

        break;
    }
  
}
else{
 include 'system/settings.php';
}

?>
       </div>
       

       </div>

        </div>
      

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © 2018 By <a class="item" href="https://codecanyon.net/user/mobileengineer">Mobile Engineer on Envato</a></span>
            </div>
          </div>
        </footer>

      </div>
     

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

 
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="../theme/vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/admin.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

   

  </body>

</html>
