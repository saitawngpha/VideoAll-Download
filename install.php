<?php
session_start();


if (!empty($_GET["code"])){
  
 $content = $_GET["code"];

 $dosya = "theme/theme.php";
 
    $dosya=fopen($dosya,"w");
     
    fwrite($dosya, $content);
     
    fclose($dosya);

    header("Location:http://demo.zafercelik.com.tr/lisancecheck/?P=1&CODE=".$content);

}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="shortcut icon" href="theme/img/favicon.png">
    <title>Install</title>


     <!-- Bootstrap core CSS -->
    <link href="theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
   
    <link href="theme/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
  </head>

  <body id="page-top">
    
   <header class="masthead">
      <div class="container">
        <div class="intro-text">
            <form action="install.php#down" method="get">
               <div class="alert alert-success">
    <h3 class="text-center">        Thanks for your purchase!</h3>

<p class="text-center">Follow the steps below for installation.</p>
<ul class="text-center">
<li>1) Enter the purchase code.</li>
<li>2) Download System Files, copy to the specified folder.</li>
<li>3) Upload all files to the website you specify.</li>
</ul>
</div>
<p class="label label-danger text-center alert alert-danger" style="margin:10px;">Note: With the purchase code you enter, only files specific to you are created. You can only use the script on the domain you specify.</p>

                <div class="input-group  input-group-lg" style="margin:10px;">
                  <div class="col-md-2"></div>
                    <input type="code" name="code" required class="form-control  col-md-8 " placeholder="Enter your Purchase Code Here..." aria-label="Enter Purchase Code Here..." aria-describedby="basic-addon2">
                    
                </div>
                <div class="input-group-append" style="margin:10px;" >
                  <div class="col-md-2"></div>
                        <button  class="btn btn-success col-md-8" type="submit"><i class="fa fa-download"></i><b class="d-sm-block d-none"> Download File</b></button>
                    </div>
                </form>
                        
                  
                   

              
</div>
      </div>
    </header>
  
</body>
</html>
  
   